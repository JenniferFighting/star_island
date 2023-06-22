<?php      require_once 'config/function.php';
           require_once 'inc/header.inc.php';
            ?>


    <link rel="stylesheet" href="assets/css/style_realGallery.css">


        <section class="new-image" >
            
        <div class="title">
            <h1>GALERIE</h1>
        </div>



<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
      <img src="assets/pictures/Discord_server.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="assets/pictures/homeRatings.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="assets/pictures/teaser5(1).png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="assets/pictures/voiture1.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="assets/pictures/voiture2.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="assets/pictures/voiture3.png" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="assets/pictures/Discord_server.png"  style="width:100%" onclick="currentSlide(1)" alt="Starisland_logo">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/pictures/homeRatings.png" style="width:100%" onclick="currentSlide(2)" alt="home">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/pictures/teaser5(1).png" style="width:100%" onclick="currentSlide(3)" alt="teaser">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/pictures/voiture1.png"style="width:100%" onclick="currentSlide(4)" alt="car1">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/pictures/voiture2.png" style="width:100%" onclick="currentSlide(5)" alt="car2">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/pictures/voiture3.png"style="width:100%" onclick="currentSlide(6)" alt="car3">
    </div>
  </div>
</div>



        <div class="socialMedia">
        <a href="" class="icon_social"><img src="assets/pictures/instagram_color.png" alt="instagram"></a>
        <a href="" class="icon_social"><img src="assets/pictures/facebook (3).png" alt="facebook"></a>
        <a href="" class="icon_social"><img src="assets/pictures/tik-tok.png" alt="tiktok"></a>

        <img src="assets/pictures/logo_discord.png" alt="discord" id="discord">

        <a href="" class="icon_social"><img src="assets/pictures/twitter.png" alt="twitter"></a>
        <a href="" class="icon_social"><img src="assets/pictures/twitch.png" alt="twitch"></a>
        <a href="" class="icon_social"><img src="assets/pictures/youtube.png" alt="youtube"></a>
</div>
        </section>

<footer>
    <div class="contact">

    <img src="assets\pictures\icone-de-messagerie.png" alt="mail">
        <p>Contact</p> 

        <img src="assets\pictures\V.jpg" alt="gtaV">

        <img src="assets\pictures\18.png" alt="under18">

        </div> 
</footer>

<script>

let slideIndex = 1;
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
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>


        <?php     require_once 'inc/footer.inc.php';          ?>