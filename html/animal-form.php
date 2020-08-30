<?php

include "config.php";

$mail=$_SESSION['username'];
$nameErr = $dateErr = $typeErr = $picErr ="";
	$name = "";
	$date = "";
	$type = "";
	$pic = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		  if (empty($_POST["name"])) {
		    $nameErr = "name is required";
		  } else {
		    $name = test_input($_POST["name"]);
		  }
			if (empty($_POST["date"])) {
		    $dateErr = "date is required";
		  } else {
		    $date = test_input($_POST["date"]);
		  }
			if (empty($_POST["type"])) {
		    $typeErr = "animal type is required";
		  } else {
		    $type = test_input($_POST["type"]);
		  }

}
if(isset($_SESSION['username'])){
	$email = $_SESSION['username'];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($name != null && $date != null && $type != null){
	mysqli_query($con, "INSERT INTO `animalform`(`name`,`birth_date`, `animal_type`,`pic`,`mail`)
 	VALUES ('$name','$date','$type','$pic', '$mail')");
}
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animal-Form</title>
	<link rel="stylesheet" type="text/css" href="../CSS/form.css">
	<link rel="stylesheet" type="text/css" href="../CSS/usersLanding.php">
	<script src="../javascript/form.js"></script>

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



	<h1>Animal-Form</h1>
	<div class="form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" onsubmit="return animalvalidation()">
			<table>
				<tr>
					<th>Name:</th>
					<th><input id="name" type="text" name="name"  maxlength="25" value="<?php echo $email;?>" required></th><span class="error"> <?php echo $nameErr;?></span>
				</tr>
				<tr>
					<th>Birth-Date:</th>
					<th><input type="date" name="date" maxlength="10" required></th><span class="error"> <?php echo $dateErr;?></span>
				</tr>
				<tr>
					<th>Animal Type:</th>
					<th><input onchange="AnimalCheck();" id="animaltype" type="text" name="type" maxlength="25" placeholder="Animal Type..." required></th><span class="error"> <?php echo $typeErr;?></span>
				</tr>
				<tr>
					<th>Upload Pic:</th>
					<td><input type="file" name="pic" accept="image/*"></td>
					<td></td>
				</tr>
				<tr>
					<th></th>
					<th><input id="submit" type="submit" value="Submit" onmouseup="welcomeMSG();" ></th>
				</tr>
			</table>
		</form>
		<script type="text/javascript">
		function welcomeMSG(){
		var user = _('name').value;
		  alert("jungle js & php together "+ user);
		}
		function _(x){
		  return document.getElementById(x);
		}
		</script>
	</div>
</div>
</body>
</html>
