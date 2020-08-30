<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>contact-us</title>
	<link rel="stylesheet" type="text/css" href="../CSS/contact-us.css">
	<script src="../javascript/form.js"></script>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php" onsubmit="return contactusvalidation()">
    <label for="fname">First Name</label>
    <input type="text" onchange="FNameCheck()" id="Fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" onchange="LNameCheck()" id="Lname" name="lastname" placeholder="Your last name.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
			<option value="usa">Israel</option>
			<option value="usa">Other</option>
    </select>

		<label for="text">Text</label>
    <input type="text" id="text" name="text_content" placeholder="What is on your mind ?">
		<div class="submit">
    <input type="submit" value="Submit">
		</div>
  </form>
</div>
</body>
</html>
