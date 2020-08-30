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
 <table width="65%" align= "center">
 <tr align=center>
  <th>Animal Name</th>
  <th>Animal Type</th>
  <th>First Name</th>
  <th>Email</th>
  <th>authorization</th>
 </tr>
 <?php
  $sql = "SELECT a.name,a.animal_type, r.firstName, r.Email, r.authorization FROM animalform AS a JOIN register AS r ON a.mail=r.Email GROUP BY a.name";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["animal_type"] . "</td><td>"
 . $row["firstName"]. "</td> <td>" . $row["Email"]. "</td> <td>" . $row["authorization"] . "</td><td>". "</td></tr>";
 }
 echo "</table>";
 } else { echo "0 results"; }
 $con->close();

 ?>
</table>

</div>

</body>
</html>
