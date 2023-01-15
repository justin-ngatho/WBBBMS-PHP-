<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Starter</title>
    <!-- font-awesome -->
    <link  rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"  />

    <!-- styles -->
    <style>
  <?php
  include 'styless.css'; ?>
    </style>
  </head>
  <body>
    <main>
      <section class="container-section">
        <!-- review -->
        <article class="review">
          <div class="img-container">
            <img src="person-1.jpeg" id="person-img" alt="" />
          </div>
          <h4 id="author">sara jones</h4>
          <p id="job">ux designer</p>
          <p id="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
            asperiores debitis incidunt, eius earum ipsam cupiditate libero?
            Iste, doloremque nihil?
          </p>
        </article>
        <article class="review fade">
          <div class="img-container">
            <img src="imagess/highest-donor.png" id="person-img" alt="" />
          </div>
          <h4 id="author">anya</h4>
          <p id="job">ux designer</p>
          <p id="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
            asperiores debitis incidunt, eius earum ipsam cupiditate libero?
            Iste, doloremque nihil?
          </p>
        </article>
      </section>
    </main>
    <!-- javascript -->

<script type="text/javascript">
let slideIndex = 0;
showSlides();

function showSlides() {
let i;
let slides = document.getElementsByClassName("reviews");
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
