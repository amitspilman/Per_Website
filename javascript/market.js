
window.onscroll = function() {
	ScrFun();
	scrollFunction();
};

function ScrFun() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
