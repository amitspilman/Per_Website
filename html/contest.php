<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>CONTEST PAGE</title>
  <link rel="stylesheet" type="text/css" href="../CSS/contest.php">
  	<script src="../javascript/contest.js"></script>
</head>
<body >
    <h1>Our Contests!</h1><br>

  <div class="view_port">
  <div class="cylon_eye"></div>
</div>


<button id="myBtn" class="buttonPrize" onclick="prizeCalc()" >Prize calculator</button>


<br>

<div class="row">
  <div class="column">
    <div class="card">
     <div class="sign-shadow"> <img class="contest-image"  src="../img/dogs-basketball.jpg" alt="dogs-basketball" >
      <div class="overlay">Sign below</div></div>
	  <div class="container">
        <h2>Dogs-basketball</h2>
        <p class="title">would you be the 1 <sup>st</sup>?</p>
        <p><strong>WINNER GETS 1000<span>&#36;</span></strong></p>
        <p id="display"><a  href="DogsBasketball.php"><button class="button">Contest registration</button></a></p>
      </div>
    </div>
  </div>
 <div class="column">
    <div class="card">
      <div class="sign-shadow"><img class="contest-image" src="../img/cats-football.jpg" alt="cats-football" >
      <div class="overlay">Sign below</div></div>
	  <div class="container">
        <h2>Cats - football</h2>
         <p class="title">would you be the 1 <sup>st</sup>?</p>
        <p><strong>WINNER GETS 1000<span>&#36;</span></strong></p>
        <p id="display" ><a href="CatsFootball.php"><button class="button">Contest registration</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
     <div class="sign-shadow"> <img class="contest-image"  src="../img/hampster-tennis.jpg" alt="hampster-tennis" >
      <div class="overlay">Sign below</div></div>
	  <div class="container">
        <h2>Hampsters-tennis</h2>
         <p class="title">would you be the 1 <sup>st</sup>?</p>
        <p><strong>WINNER GETS 1000<span>&#36;</span></strong></p>
        <p id="display" ><a  href="HampstersTennis.php"><button class="button">Contest registration</button></a></p>
      </div>
    </div>
  </div>
</div>
<!--BIRDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
<div class="containerb">

  <div class="bird-container">
    <div class="bird"></div>
    </div>
  </div>
</body>
</html>
