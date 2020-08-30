<?php
session_start();

$con = mysqli_connect('Localhost','root','') or die('could not connect to database');
$db = mysqli_select_db($con,'members') or die('could not select database');
?>
