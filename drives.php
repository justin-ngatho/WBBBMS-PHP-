<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;} */

/* Slideshow container */
.slideshow-container {
  /* max-width: 1000px; */
  /*
  position: relative;
  margin: auto; */
  position: absolute;
  width: 70%;
  height: 50%;
  background: var(--clr-primary-9);
  color: var(--clr-white);
  text-align: center;
  position: absolute;
  left: 20%;
  right: 25%;
  margin: -25px 0 0 -25px;
}

/* Caption text */
.drives-text {
  /* color: #f2f2f2; */
  /* font-size: 15px; */
  /* padding: 8px 12px; */
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color: #861657;
  color: white;
  font-size: 16px;
  padding: 16px 35px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imagess/school.jpg" style="width:100%">
  <div class="drives-text">KCA University we are coming!<br> Starting from Monday 25/07/2022 to Friday 29/07/2022
  <br> Come visit us on the KCA University sports Ground as we educate you more on the blood bank management process in Kenya!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imagess/mom1.jpg" style="width:100%">
  <div class="drives-text">Let's meet in Ruiru Municipal Stadium on 31/07/2022. <br>In collaboration with the Red Cross
    Society of Kenya. There will be lots of fun activities for kids including horse riding, bouncing and so on, <br> as we
    raise funds for kids in the ICU kids department Kenyatta National hospital.
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imagess/cleann.jpg" style="width:100%">
  <div class="drives-text">Is your organization interested in hosting a blood donation drive? <br>
   Registration for blood drives is free! <br>
  Follow the link above to register and we will gwt back to you ASAP! </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html>
