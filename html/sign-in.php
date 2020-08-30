<?php
include "config.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  $myusername=$mypassword="";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myusername = test_input($_POST['email']);
      $mypassword = test_input($_POST['password']);
      $myusername = mysqli_real_escape_string($con , $_POST['email']);


	$query = "SELECT * FROM register WHERE Email='$myusername' and password='$mypassword'";
	$result = mysqli_query($con,$query);
	$count = mysqli_num_rows($result);

  if(mysqli_num_rows($result) > 0 ){
    $_SESSION['username'] = $myusername;
    $_SESSION['password'] = $mypassword;
    header( "location: home.php");
  }else {
    echo "<br><br> Your username/Password is invalid";
    }
  mysqli_close($con);
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign-in</title>
	<link rel="stylesheet" type="text/css" href="../CSS/form.css">
	<script src="../javascript/form.js"></script>
</head>
<body>
	<h1>Sign-in</h1>
	<div class="form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" onsubmit="return signvalidation()" >
			<table>
				<tr>
					<th>Email:</th>
					<th><input type="email" name="email" maxlength="25" placeholder="Enter your email" autofocus required></th>
				</tr>
				<tr>
					<th>Password:</th>
					<th><input oninput="minipasscheck()" id="pass1" type="password" name="password" placeholder="Enter your password" maxlength="8" required></th>
				</tr>
				<tr>
					<th></th>
					<th><input  id="submit" type="submit" ></th>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
