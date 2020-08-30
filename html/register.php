<?php
include "config.php";

$firstnameErr = $lastnameErr = $emailErr = $password2Err = $passwordErr = $genderErr="";
	$firstname = "";
	$lastname = "";
	$email = "";
	$password = "";
	$password2 = "";
	$gender = "";
	$authorization = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {


		  if (empty($_POST["firstname"])) {
		    $firstnameErr = "first Name is required";
		  } else {
		    $firstname = test_input($_POST["firstname"]);
		  }

			if (empty($_POST["lastname"])) {
		    $lastnameErr = "last Name is required";
		  } else {
		    $lastname = test_input($_POST["lastname"]);
		  }
			if (empty($_POST["email"])) {
		    $emailErr = "Name is required";
		  } else {
		    $email = test_input($_POST["email"]);
		  }
			if (empty($_POST["password"])) {
		    $passwordErr = "Name is required";
		  } else {
		    $password = test_input($_POST["password"]);
		  }
			if (empty($_POST["password2"])) {
				$password2Err = "Name is required";
			} else {
				$password2 = test_input($_POST["password2"]);
			}
			if (empty($_POST["gender"])) {
		    $genderErr = "Name is required";
		  } else {
		    $gender = test_input($_POST["gender"]);
		  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($firstname != null && $lastname != null && $email != null && $password == $password2 ){
	mysqli_query($con, "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password`, `gender`, `authorization`)
 	VALUES ('$firstname','$lastname','$email','$password','$gender','user')");
		$_SESSION['username'] = $email;
		$_SESSION['password'] = $password;
		header("location: ./home.php");
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../CSS/form.css">
	<script src="../javascript/form.js"></script>
</head>
<body>
	<h1>Register</h1>
	<div class="form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return regvalidation()">
			<table>
				<tr>
					<th>First name:</th>
					<th><input oninput="FNameCheck();" id="Fname" type="text" name="firstname"  maxlength="10" placeholder="First name" autofocus required></th><span class="error"> <?php echo $firstnameErr;?></span>
				</tr>
				<tr>
					<th>Last name:</th>
					<th><input oninput="LNameCheck();" id="Lname" type="text" name="lastname" placeholder="Last name" maxlength="15" required></th></th><span class="error"> <?php echo $lastnameErr;?></span>
				</tr>
				<tr>
					<th>Email:</th>
					<th><input  id="mail" type="email" name="email" placeholder="Enter your email" maxlength="25" ></th></th><span class="error" required> <?php echo $emailErr;?></span>
				</tr>
				<tr>
					<th>Password:</th>
					<th><input id="pass1" type="password" name="password" placeholder="Enter your password" maxlength="8" ></th></th><span class="error" required> <?php echo $passwordErr;?></span>
				</tr>
				<tr>
					<th>Confirm-pass:</th>
					<th><input id="pass2" oninput="passcheck()" type="password" name="password2" placeholder="Enter your password" maxlength="8" ></th></th><span class="error5" required> <?php echo $password2Err;?></span>
				</tr>
				<tr>
					<th><input type="radio" name="gender" value="male"  checked> Male</th>
  				<th><input type="radio" name="gender" value="female"> Female</tr>
				<tr>
					<th>  <input type="reset" value="Reset">
					</th>
					<th><input id="submit" type="submit" value="submit"></th>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>
