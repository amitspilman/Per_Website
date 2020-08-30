<?php
	include "config.php";
?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../CSS/home.css">
	<script src="../javascript/home.js"></script>
</head>
<body>
	<h1><img class="headline" src="../img/titleBanner.png"></h1>

	<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img class="imgSlide" src="../img/slide1_wide.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img class="imgSlide" src="../img/slide2_wide.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img class="imgSlide" src="../img/slide3_wide.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img class="imgSlide" src="../img/slide4_wide.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img class="imgSlide" src="../img/slide5_wide.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img class="imgSlide" src="../img/slide6_wide.jpg" >
  </div>

  <a class="prev" onclick="plusSlides(-1)">'❮'</a>
  <a class="next" onclick="plusSlides(1)">'❯'</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="../img/slide1.jpg"  onclick="currentSlide(1)" onload="currentSlide(1)" alt="Lion and Hyena">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/slide2.jpg"  onclick="currentSlide(2)" alt="Camels">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/slide3.jpg"  onclick="currentSlide(3)" alt="Monkey wakes a Lion">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/slide4.jpg"  onclick="currentSlide(4)" alt="Bored Lion">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/slide5.jpg"  onclick="currentSlide(5)" alt="Seal">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/slide6.jpg"  onclick="currentSlide(6)" alt="Chimpanzee">
    </div>
  </div>
</div>
</body>
</html>
