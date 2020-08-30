
var prevScrollpos = window.pageYOffset;
window.onscroll = function()
{
	scrollFunction();
	var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
	    document.getElementById("navbar").style.top = "36px";
	  }
      else
      {
    	document.getElementById("navbar").style.top = "-50px";
 	 }
  prevScrollpos = currentScrollPos;

}



// When the user scrolls down 30px from the top of the document, show the button
function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
