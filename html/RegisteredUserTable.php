<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../CSS/RegisteredUserTable.css">
  <link rel="stylesheet" type="text/css" href="../CSS/usersLanding.php">
 <title>Table with database</title>

</head>
<body>

  <div class="sidenav">
    <br>

    <a href="animal-form.php">Register Animal</a>
    <a href="contest-form.php">Open Contest</a>
    <a href="UpdateInfo.php">Update My Info</a>
    <a href="animal-list.php">animal list</a>
    <div id="authority"><a href="RegisteredUserTable.php">Managers Info</a></div>
    <div id="authority"><a href="managerDelete.php">manager Delete</a></div>
  </div>

  <div class="main">


  <br><br>
 
 <?php
      $con = mysqli_connect("localhost", "root", "", "members");
      #openning the connection
      if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      (count($_GET) == 0) ? $page = 1 : $page = $_GET['page'];
      #setting the page number
      //var_dump($_GET);
      $rowSpan = 3;
      $startRow = $rowSpan * ($page - 1);
      $sql = "SELECT Email, firstName,lastName,gender "
                  ."FROM register WHERE authorization='user' "
                  ."LIMIT $startRow, $rowSpan";
      $queryData = mysqli_query($con, $sql);

      $queryTotalRows = mysqli_query($con, "SELECT count(1) FROM `register` "
          . "WHERE `authorization`='user'");
  $totalRowsArray = mysqli_fetch_array($queryTotalRows);
  //var_dump($totalRowsArray);
  $totalRows = $totalRowsArray[0];
      $lastPage = ceil($totalRows/$rowSpan);
      //var_dump($totalRows);
      #defining the table header
      echo "<table border='1'>"
          . "<caption> register (Page $page of $lastPage)</caption>"
          . "<thead><tr><th>ID</th><th>E-mail</th><th>first name</th><th>last name</th><th>gender</th>"
          . "</tr></thead>";
      $counter = $startRow + 1;
      echo "<tbody>";
      while ($row = mysqli_fetch_array($queryData)) {
          #fetching each row as assoc and numeric array
          //var_dump($row);
          echo "<tr><td>" . $counter++ . "</td>";
          for ($i = 0; $i < count($row) / 2; $i++) {
              echo "<td>$row[$i]</td>";
          }
          echo "</tr>";
      }
      echo "</tbody></table>";
      #set the nav arrows
      $url = $_SERVER["PHP_SELF"];
      //var_dump($_SERVER);
      //echo $url;
      $backPage = $page - 1;
      $nextPage = $page + 1;
      if ($page != 1) {
          echo "<a href='".$url."?page=1'> <<- </a>";
          echo "<a href='".$url."?page=".$backPage."'> <-- </a>";
      }

      if ($page != $lastPage) {
          echo "<a href='".$url."?page=".$nextPage."'> --> </a>";
          echo "<a href='".$url."?page=".$lastPage."'> ->> </a>";
      }
      mysqli_close($con);
      ?>
</table>
</div>
</body>
</html>
