<?php
include "config.php";

$nameErr = $dateErr = $contest_typeErr = $feeErr = $participantsErr ="";
	$name = "";
	$date = "";
	$contest_type = "";
	$fee = "";
	$participants = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		  if (empty($_POST["name"])) {
		    $nameErr = "name is required";
		  } else {
		    $name = test_input($_POST["name"]);
		  }

			if (empty($_POST["date"])) {
		    $dateErr = "birth-date is required";
		  } else {
		    $date = test_input($_POST["date"]);
		  }
			if (empty($_POST["type"])) {
		    $contest_typeErr = "contest type is required";
		  } else {
		    $contest_type = test_input($_POST["type"]);
		  }
			if (empty($_POST["fee"])) {
		    $feeErr = "fee is required";
		  } else {
		    $fee = test_input($_POST["fee"]);
		  }
			if (empty($_POST["participant"])) {
				$participantsErr = "participant number is required";
			} else {
				$participants = test_input($_POST["participant"]);
			}


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($name != null && $date != null && $contest_type != null && $fee != null && $participants != null  ){
mysqli_query($con, "INSERT INTO `contestform`(`name`, `date`, `contest_type`, `fee`, `participant`)
 VALUES ('$name','$date','$contest_type','$fee','$participants')");

}
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contest-Form</title>
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

	<h1>Contest-Form</h1>
	<div class="form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" onsubmit="return contestvalidation()">
			<table>
				<tr>
					<th>Name:</th>
					<th><input id="name" type="text" name="name" maxlength="25" placeholder="Your pet name is ?" required></th><span class="error"> <?php echo $nameErr;?></span>
				</tr>
				<tr>
					<th>Date:</th>
					<th><input type="date" name="date" maxlength="10" required></th><span class="error"> <?php echo $dateErr;?></span>
				</tr>
				<tr>
					<th>Contest Type:</th>
					<th><input id="contest-type" onchange="TypeCheck()" type="text" name="type" maxlength="25" placeholder="Contest Type..." required></th><span class="error"> <?php echo $contest_typeErr;?></span>
				</tr>
				<tr>
					<th>Fee:</th>
					<th><input type="number" name="fee" placeholder="Participation Fee" maxlength="4" min="0" required></th><span class="error"> <?php echo $feeErr;?></span>
				</tr>
				<tr>
					<th>Number of participant:</th>
					<th><input type="number" name="participant" placeholder="Number of participant  ?" maxlength="8" min="0" required></th><span class="error"> <?php echo $participantsErr;?></span>
				</tr>
				<tr>
					<th></th>
					<th><input id="submit" type="submit" value="Submit"></th>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
