<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>MARKET PLACE</title>
  <link rel="stylesheet" type="text/css" href="../CSS/market.css">
  <script src="../javascript/market.js"></script>
</head>
<body>
  <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

  <div class="header">
    <br>
  <h1>MARKET PLACE</h1>

<div class="post-animal">
  <button class="button" style="vertical-align:middle" id="myBtn"><span>Post Animal </span></button>
</div>




  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
</div>
  <br><br><br><br>
  <table>
<tr>
<td>
<div class="card">
  <img src="../img/seahorse3.jpg" alt="Avatar">
  <div class="container">
    <h3>Pepper</h3>
    <p>SEAHORSE</p>
    <p class="status">-ADDOPTION-</p>
    <p class="details">just take him !</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/alien2.jpg" alt="Avatar">
  <div class="container">
    <h3>Bros</h3>
    <p>ALIEN</p>
    <p class="status">-FOR TRADE-</p>
    <p class="details">2 years old</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/cat1.jpg" alt="Avatar">
  <div class="container">
    <h3>Polo</h3>
    <p>CAT</p>
    <p class="status">-FOR TRADE-</p>
    <p class="details">cute cat. never dies.</p>
  </div>
</div>
</td>
</tr>
<tr>
  <td>
  <div class="card">
    <img src="../img/dragon1.jpg" alt="Avatar">
    <div class="container">
      <h3>Drogo</h3>
      <p>DRAGON</p>
      <p class="status">-FOR TRADE-</p>
      <p class="details">3 years old ,spits fire</p>
    </div>
  </div>
  </td>
<td>
<div class="card">
  <img src="../img/seahorse2.jpg" alt="Avatar">
  <div class="container">
    <h3>Chilli</h3>
    <p>SEAHORSE</p>
    <p class="status">-FOR SALE-</p>
  <p class="details">5 years old</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/cat3.jpg" alt="Avatar">
  <div class="container">
    <h3>Pan</h3>
    <p>CAT</p>
    <p class="status">-FOR SALE-</p>
    <p class="details">18 years old.</p>
  </div>
</div>
</td>
</tr>
<tr>
<td>
<div class="card">
  <img src="../img/dragon2.jpg" alt="Avatar">
  <div class="container">
    <h3>Viserion</h3>
    <p>DRAGON</p>
    <p class="status">-FOR SALE-</p>
    <p class="details">take him for free!</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/ant1.jpg" alt="Avatar">
  <div class="container">
    <h3>Billy</h3>
    <p>ANT</p>
    <p class="status">-FOR ADDOPTION-</p>
  <p class="details">2 years old ,pretty strong</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/alien1.jpg" alt="Avatar">
  <div class="container">
    <h3>E.T</h3>
    <p>ALIEN</p>
    <p class="status">-FOR ADDOPTION-</p>
    <p class="details">32 years old ,a bit weird</p>
  </div>
</div>
</td>
</tr>
<tr>
<td>
<div class="card">
  <img src="../img/cat2.jpg" alt="Avatar">
  <div class="container">
    <h3>Kitty</h3>
    <p>CAT</p>
    <p class="status">-FOR TRADE-</p>
    <p class="details">2 months old</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/seahorse9.jpg" alt="Avatar">
  <div class="container">
    <h3>Hippocampus</h3>
    <p>SEAHORSE</p>
    <p class="status">-FOR TRADE-</p>
    <p class="details">23 years old ,easy minded</p>
  </div>
</div>
</td>
<td>
<div class="card">
  <img src="../img/dragon3.jpg" alt="Avatar">
  <div class="container">
    <h3>Rheagal</h3>
    <p>DRAGON</p>
    <p class="status">-FOR TRADE-</p>
    <p class="details">emotional development of a 5 year old</p>

  </div>
</div>
</td>
</tr>
</table>

<div class="dog">

  <div class="dog-body"></div>
  <div class="leg1"></div>
  <div class="leg2"></div>
  <div class="leg3"></div>
  <div class="leg4"></div>
  <div class="tail"></div>
  <div class="ear"></div>
  <div class="nose"></div>
  <div class="eye"></div>
  <div class="tongue"></div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <form action="/action_page.php" class="form-container">
    <h1>Post your Animal</h1>

    <label for="animalName"><b>Animal's name </b></label>
    <input type="text" placeholder="Enter animal's name" name="animalName" required>
	<br>
    <br>

    <label for="animal"><b>Choose your animal</b></label>
    <select name="animal">
 		 <option value="DRAGON">DRAGON</option>
 		 <option value="ANT">ANT</option>
 		 <option value="ALIEN">ALIEN</option>
 		 <option value="HUMAN">HUMAN</option>
         <option value="SEAHORSE">SEAHORSE</option>
         <option value="CAT">CAT</option>
	</select>
    <br><br>
    <label for="action"><b>Choose your action</b></label>
    <select name="action">
 		 <option value="-ADDOPTION-">-ADDOPTION-</option>
 		 <option value="-FOR TRADE-">-FOR TRADE-</option>
 		 <option value="-FOR SALE-">-FOR SALE-</option>

	</select>
    <br><br>
    <label for="animalDetails"><b>Animal's details  </b></label>
    <input type="text" placeholder="Eneter your text here" name="animalDetails" required>
	<br>
    <br>
	<label for="animalPic"><b>Animal's picture  </b></label>
    <input type="file" name="animalPic" accept="image/*">

    <br><br>
    <button type="submit" class="btn">Submit</button>

  </form>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
