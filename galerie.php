<?php      require_once 'config/function.php';
           require_once 'inc/header.inc.php';
            ?>

<link rel="stylesheet" href="assets/css/style_galerie.css">

<section class="bkg-img">

<div class="title">
            <h1>Bienvenue sur Star'Island</h1>
        </div>
    
  <div class="carousel-container">

    <div class="mySlides">
        <img src="assets/pictures/voiture1.png" alt="Image 1">
    </div>

      <div class="mySlides">
        <img src="assets/pictures/voiture2.png" alt="Image 2">
      </div>
      <div class="mySlides">
        <img src="assets/pictures/voiture3.png" alt="Image 3">
      </div>
      <div class="mySlides">
        <img src="assets/pictures/teaser5(1).png" alt="Image 4">
      </div>
      <div class="mySlides">
        <img src="assets/pictures/Discord_server.png" alt="Image 5">
      </div>

        <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

    </div>
  </div>
</section>

            <!-- <div class="circle-container">
         <div class="circle"></div>  
             <div class="circle white-circle"></div>
                 <div class="circle"></div>
        </div> -->

<section class="container-socialMedia">

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


<script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

//     let slideIndex = 1;
// showSlides(slideIndex);

//  Next/previous controls
//  function plusSlides(n) {
//     showSlides(slideIndex += n);
//  }

// Thumbnail image controls
//   function currentSlide(n) {
//     showSlides(slideIndex = n);
//  }

//  function showSlides(n) {
//   let i;
//    let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//    if (n > slides.length) {slideIndex = 1}
//    if (n < 1) {slideIndex = slides.length}
//    for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//    }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//  }
</script>



<?php     require_once 'inc/footer.inc.php';          ?>