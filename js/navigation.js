window.onscroll = function() {setSticky()};

const navbar = document.getElementById("navbar");
const topPos = navbar.offsetTop;

function setSticky() {
  if (window.pageYOffset >= topPos) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

document.getElementById("open-menu").onclick = function(){document.getElementById("mobile-nav").style.right = "0"}
document.getElementById("close-menu").onclick = function(){document.getElementById("mobile-nav").style.right = "-100%"}

document.getElementById("open-search").onclick = function(){document.getElementById("search-mobile-container").style.top = "0"}
document.getElementById("close-search").onclick = function(){document.getElementById("search-mobile-container").style.top = "-100%"}

document.getElementsByClassName("search-btn")[0].onclick = function(){document.getElementById("search-form-content").classList.toggle("show")}