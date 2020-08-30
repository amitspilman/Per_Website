<?php
include "html/config.php";
 If(isset($_SESSION['username']))
	{
		echo $_SESSION["username"];
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>main</title>
	<link rel="stylesheet" type="text/css" href="CSS/index.php">
	<style>
		body {
			background: url("img/img_tiger.jpg");
  		background-size: 100%;
		}
	</style>
</head>
<body >

		<nav  class="menubar">
  		<a class="link" href="html\home.php" target="iframe_bar">Home</a>
  		<a class="link" href="html\guide.php" target="iframe_bar">Guide</a>
			<a class="link" href="html\contest.php" target="iframe_bar">Contest</a>
			<a class="link" href="html\market.php" target="iframe_bar">Market-Place</a>
			<a class="link" href="html\about.php" target="iframe_bar">About</a>
			<a class="link" href="html\contact-us.php" target="iframe_bar">Contact-Us</a>
			<?php If(isset($_SESSION['username']))
 			{

				echo "connected: ",$_SESSION["username"];
 			}
			?>
			<?php if(isset($_SESSION['username'])) : ?>
				<a class="link2" href="html\usersLanding.php" target="iframe_bar">ME</a>
			<?php endif; ?>

		</nav>
		<div class="dropdown">
			<img id="account" src="img\img_account.png" alt="account-logo" width="35px" height="35px">
			<div class="dropdown-content">
				<ul id="list">
					<li><a id="list1" href="html\sign-in.php" target="iframe_bar">Sign-in</a></li>
					<li><a id="list2" href="html\register.php" target="iframe_bar">Register</a></li>
					<li><a id="list2" href="html\logout.php" target="iframe_bar">logout</a></li>
				</ul>
			</div>
		</div>
	<iframe   id="if" src="html\home.php" name="iframe_bar"></iframe>
	<div class="footer">

  <p >Recommended resolution 1280X720</p>
</div>
</body>
</html>
