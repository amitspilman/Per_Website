
<?php
session_start();

$con = mysqli_connect('Localhost','root','') or die('could not connect to database');
$db = mysqli_select_db($con,'members') or die('could not select database');

header("Content-Type: text/css; charset=utf-8");

if(isset($_SESSION['username'])){
	$email = $_SESSION['username'];
	$sql = "SELECT * FROM register as r where r.Email='$email'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$gender = $row['gender'];

	if ($gender=='f'){
		$color = 'red';
	}

	else if ($gender=='m') {
		$color = 'blue';
	}

	Else {
		$color = ' #87ceeb';
	}
}
Else {
	$color = 'green';
}

 ?>

	html, body {
  	margin: 0;
  	height: 99%;
	}
	.menubar{
		overflow: hidden;
	 background-color: <?=$color?>;
	  position: fixed;
	  top: 0;
	  width: 100%;
		word-spacing: 10px;
		height: 36px;
	}
 	.link, .link2 {
	 font-size: 30px;
	 font-style: italic;
	 text-shadow:1px 1px 1px black;
	 color: black;
	 text-decoration: none;
	 position: relative;
	 left: 10px;
 }
 .link2{
	 position: absolute;
	 left: 88%;
 }
	.link:hover {
		color: red;
	}
	#account{
		 float: right;
		 overflow-x: hidden;
		 position: fixed;
		 right: 20px;
		 top: 0px;
	 }

 #list1, #list2 {
	 text-decoration: none;
	 color: black;
	 font-size: 20px;
	 position: relative;
	 right: 8px;
 }
 #list {
	 position: fixed;
	 right: 0px;
	 top: 20px;
	 float: right;
	 list-style-type: none;
 	 min-width: 80px;
	 border-style: dotted;
 }
 .dropdown-content {
	visibility: hidden;
}
 .dropdown:hover .dropdown-content{
  visibility: visible;
}
#list1:hover, #list2:hover {
	text-shadow:3px 3px 3px black;
	color: red;
}
iframe {
	width: 100%;
	height: 100%;
	border: none;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   color: white;
  right: 5%;
	  height:6%;
		font-size:10px;
}
