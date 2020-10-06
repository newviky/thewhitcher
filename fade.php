<html>
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="slideshow-container1">
<!-- Full-width images with number and caption text -->
<div class="mySlides1 fade1">

  <img id="img1" src="image/img1.jpg" style="width:100%">

</div>

<div class="mySlides1 fade1">

  <img id="img2" src="image/img2.jpg" style="width:100%">

</div>

<div class="mySlides1 fade1">
  <img id="img3" src="image/img3.jpg" style="width:100%">
  
</div>
</div>
<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>