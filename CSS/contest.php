<?php
session_start();

$con = mysqli_connect('Localhost','root','') or die('could not connect to database');
$db = mysqli_select_db($con,'members') or die('could not select database');

header("Content-Type: text/css; charset=utf-8");
$authoC='none';
if(isset($_SESSION['username'])){
	$email = $_SESSION['username'];
	$sql = "SELECT * FROM register as r where r.Email = '$email'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$authoC = $row["authorization"];
  if($authoC ==''){
    $authoC='inline';
  }
}
?>

body {
  margin:0px;
  position: relative;
  top: 20px;
}
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.column {
  float: left;
  width: 32%;
  margin-bottom: 16px;
  padding: 0 4px;
  max-height: 600px;
  background-color: white;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 40%;
}
.container {
  padding: 0 50px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: grey;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;

}
.button:hover {
  background-color: #555;
}
h2 ,h3{ text-shadow: 0 0 3px #FF0000;}
.row {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.contest-image {
border-radius: 5px;
  cursor: pointer;
  display: block;
}
.overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}
.sign-shadow{
 position: relative;
}
.sign-shadow:hover .overlay {
  opacity: 1;
}
h1 { color: #111; font-family: 'Open Sans Condensed', sans-serif; font-size: 64px; font-weight: 700;
 line-height: 64px; margin: 0 0 0; padding: 20px 30px; text-align: center;
 text-transform: uppercase;border-bottom: 3px solid black; background-color: rgb(127, 255, 0); }

 .contest-image{
 width: 100%;
 }
 .view_port {
   position:relative;
   top: -20px;
   background-color: black;
   height: 25px;
   width: 100%;
   overflow: hidden;

 }

 .cylon_eye {
   background-color: red;
   background-image: linear-gradient(to right,
       rgba(0, 0, 0, .9) 25%,
       rgba(0, 0, 0, .1) 50%,
       rgba(0, 0, 0, .9) 75%);
   color: white;
   height: 100%;
   width: 20%;

   -webkit-animation: 4s linear 0s infinite alternate move_eye;
           animation: 4s linear 0s infinite alternate move_eye;
 }

 @-webkit-keyframes move_eye { from { margin-left: -20%; } to { margin-left: 100%; }  }
         @keyframes move_eye { from { margin-left: -20%; } to { margin-left: 100%; }  }
/*  BIRDDDDDDDDDDDDDDDDDDDDDDDDDDDDDd    */






.containerb {
	z-index: 1;
	position: relative;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;

	min-height: 30rem;

}

.bird {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/174479/bird-cells.svg);
	background-size: auto 100%;
	width: 352px;
	height: 500px;
	will-change: background-position;

	animation-name: fly-cycle;
	animation-duration: 1s;
	animation-delay: -0.5s;
	animation-timing-function: steps(10);
	animation-iteration-count: infinite;
}

.bird-container {
	position: fixed;
	top: 240px;
	left: 480px;
	transform: translate(-150%,-30%);
	will-change: transform;
}

@keyframes fly-cycle {

	100% {
		background-position: -3600px 0;
	}

}

.buttonPrize {
  position:relative;
  left: 42%;
  background-color: white;
  border: 2px solid #f44336;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.buttonPrize:hover {
  background-color: #f44336;
  color: white;
}
#display{

  display: <?=$authoC?>;
}
.a{
  display: <?=$authoC?>;
}
