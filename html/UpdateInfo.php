<?php
	include "config.php";

	$firstname=$lastname=$password=$password2=$gender="";
	$username=$_SESSION['username'];

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$password = $_POST['password'];
				$password2 = $_POST['password2'];
				$gender = $_POST['gender'];
		}


if ($firstname != null && $lastname != null && $password == $password2 && $gender != null){
		$sqll=	"UPDATE `register` SET `firstName`='$firstname',`lastName`='$lastname',`password`='$password',`password`='$gender' WHERE `Email`='$username' ";
		mysqli_query($con,$sqll);
	}

	?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/UpdateInfo.css">
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


</div>
<br><br>
<div align= center>
  <div class="form">
		<form method="POST" action="UpdateInfo.php" onsubmit="return regvalidation()">
			<table>
				<tr>
					<th>First name:</th>
					<th><input oninput="FNameCheck();" id="Fname" type="text" name="firstname"  maxlength="10" placeholder="First name" autofocus required></th><span class="error">
				<tr>
					<th>Last name:</th>
					<th><input oninput="LNameCheck();" id="Lname" type="text" name="lastname" placeholder="Last name" maxlength="15" required></th></th><span class="error">
				</tr>

				<tr>
					<th>Password:</th>
					<th><input id="pass1" type="password" name="password" placeholder="Enter your password" maxlength="8" ></th></th><span class="error" required>
				</tr>
				<tr>
					<th>Confirm-pass:</th>
					<th><input id="pass2" oninput="passcheck()" type="password" name="password2" placeholder="Enter your password" maxlength="8" ></th></th><span class="error5" required>
				</tr>
				<tr>
					<th><input type="radio" name="gender" value="male"  checked> Male</th>
  				<th><input type="radio" name="gender" value="female"> Female</tr>
				<tr>
					<th>  <input type="reset" value="Reset">
					</th>
					<th><button id="submit" name="submit" type="submit" >submit</button></th>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
