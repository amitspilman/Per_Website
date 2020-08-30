<?php
session_start();

$con = mysqli_connect('Localhost','root','') or die('could not connect to database');
$db = mysqli_select_db($con,'members') or die('could not select database');

header("Content-Type: text/css; charset=utf-8");

if(isset($_SESSION['username'])){
	$email = $_SESSION['username'];
	$sql = "SELECT * FROM register as r where r.Email = '$email'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$autho = $row["authorization"];
  if($autho =='user'){
    $autho='none';
  }else{
      $autho='inline';
  }
}
?>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#authority{
   display: <?=$autho?>;
}
