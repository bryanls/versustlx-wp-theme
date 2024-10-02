var slideIndex = 0;

showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");

  // Hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Increment slide index
  slideIndex++;

  // Reset slide index if it exceeds the number of slides
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // Remove active class from all dots
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Show the current slide
  slides[slideIndex - 1].style.display = "block";

  // Add active class to the current dot
  dots[slideIndex - 1].className += " active";

  // Call showSlides again after 3500ms
  setTimeout(showSlides, 3500);
}