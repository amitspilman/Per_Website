<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>TRAIN YOUR ANIMAL</title>
  <link rel="stylesheet" type="text/css" href="../CSS/guide.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Choose your animal:</h1>

<div id="navbar">
  <a href="guide.php ">Animals guide menu</a>
  <a href="dragontrain.php">Dragon</a>
  <a href="anttrain.php">Ant</a>
  <a href="alientrain.php">Alien</a>
  <a href="humantrain.php">Human</a>
  <a href="seahorsetrain.php ">Seahorse</a>
  <a href="cattrain.php">Cat</a>
</div>

<button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>
<br><br><br>

<table id="table">
  <tr>
    <td>
      <a href="dragontrain.php"><img src="..\img\DragonRound.jpg" alt="Avatar"></a>
      <h2>Dragon</h2>
    </td>
    <td>
      <a href="anttrain.php"><img src="..\img\AntRound.jpg" alt="Avatar"></a>
      <h2>Ant</h2>
    </td>
    <td>
      <a href="alientrain.php"><img src="..\img\AlienRound.jpg" alt="Avatar"></a>
      <h2>Alien</h2>
    </td>
  </tr>
  <tr>
    <td>
      <a href="humantrain.php">
      <img src="..\img\HumanRound.jpg" alt="Avatar"></a>
      <h2>Human</h2>
    </td>
    <td>
      <a href="seahorsetrain.php">
      <img src="..\img\SeahorseRound.jpg" alt="Avatar"></a>
      <h2>Seahorse</h2>
    </td>
    <td>
      <a href="cattrain.php">
      <img src="..\img\CatRound.jpg" alt="Avatar"></a>
      <h2>Cat</h2>
    </td>
  </tr>
</table>

</body>
</html>
