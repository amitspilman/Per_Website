<?php
include "config.php";

$emailErr ="";
	$email = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["email"])) {
			$emailErr = "Name is required";
		} else {
			$email = test_input($_POST["email"]);
		}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//here deletes the record


if ($email != null ){


		mysqli_query($con, "DELETE FROM members.register
		WHERE Email = '$email'");
		header("location: home.php");

}



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/UpdateInfo.css">
 <title>Table with database</title>
</head>
<body>



  <div class="sidenav">
    <br>

		<a href="animal-form.php">Register Animal</a>
    <a href="contest-form.php">Open Contest</a>
    <a href="UpdateInfo.php">Update My Info</a>
    <div id="authority"><a href="RegisteredUserTable.php">Managers Info</a></div>
		<div id="authority"><a href="managerDelete.php">manager Delete</a></div>
  </div>

  <div class="main">


  <br><br>
 <table ID="table1" width="65%" align= "center">
 <tr align=center>
  <th  >email</th>
  <th>first name</th>
  <th>last name</th>
  <th>gender</th>
  <th>password</th>
 </tr>
 <?php
  $name=$_SESSION['username'];

  $sql = "SELECT * FROM members.register ";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Email"]. "</td><td>" . $row["firstName"] . "</td><td>"
 . $row["lastName"]. "</td> <td>" . $row["gender"] . "</td><td>" . $row["password"] . "</td></tr>";
 }
 echo "</table>";
 } else { echo "0 results"; }
 $con->close();

 ?>
</table>

</div>
<br><br>
<div align= center>
  <div class="form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return regvalidation()">
			<table>



				<tr>
					<th>Email:</th>
					<th><input  id="mail" type="email" name="email" placeholder="Enter your email" maxlength="25" ></th></th><span class="error" required> <?php echo $emailErr;?></span>
				</tr>


				<tr>

					<th><input id="submit" type="submit" value="delete"></th>

				</tr>
			</table>
		</form>
	</div>
</div>
<div><br><br></div>
</body>
</html>
