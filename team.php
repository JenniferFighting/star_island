<?php      require_once 'config/function.php';
           require_once 'inc/header.inc.php';
            ?>

    <link rel="stylesheet" href="assets/css/style_team.css">

    <section class="team">
    <div class="title">
            <h1>L'EQUIPE</h1>
        </div>

<div id="avatars-container" class="users-container"></div>

    <!-- <img src="assets/pictures/ellios 4.png" class="rounded-circle mb-3" style="width: 150px;"
  alt="Avatar"/>

<h5 class="mb-2"><strong>John Doe</strong></h5>
<p class="text-muted">Web designer <span class="badge bg-primary">PRO</span></p> -->


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
  // Données des utilisateurs
  var users = [
    {
      name: "John Doe",
      role: "Web designer",
      badge: "PRO",
      avatar: "assets/pictures/ellios 4.png"
    },
    {
      name: "Jane Doe",
      role: "Développeuse",
      badge: "PRO",
      avatar: "assets/pictures/Souen 4.png"
    },
    {
      name: "John Doe",
      role: "Developpeur",
      badge: "PRO",
      avatar: "assets/pictures/hans 6.png"
    },
    {
      name: "Jane Doe",
      role: "Développeuse",
      badge: "PRO",
      avatar: "assets/pictures/charmilia 6.png"
    },
    {
      name: "User 5",
      role: "Web designer",
      badge: "PRO",
      avatar: "assets/pictures/ellios 4.png"
    },
    {
      name: "User 6",
      role: "Bénévole",
      badge: "PRO",
      avatar: "assets/pictures/Souen 4.png"
    },
    {
      name: "User 7",
      role: "Web designer",
    //   badge: "PRO",
      avatar: "assets/pictures/ellios 4.png"
    },
    {
      name: "User 8",
      role: "Etudiante",
    //   badge: "PRO",
      avatar: "assets/pictures/Souen 4.png"
    }
  ];

  // Création dynamique des éléments HTML
  var container = document.getElementById("avatars-container");
  
  users.forEach(function(user) {
    var avatarElement = document.createElement("img");
    avatarElement.src = user.avatar;
    avatarElement.className = "rounded-circle mb-3";
    avatarElement.style.width = "150px";
    avatarElement.alt = "Avatar";
    container.appendChild(avatarElement);

    var nameElement = document.createElement("h5");
    var nameText = document.createTextNode(user.name);
    nameElement.className = "mb-2";
    nameElement.appendChild(nameText);
    container.appendChild(nameElement);

    var roleElement = document.createElement("p");
    var roleText = document.createTextNode(user.role + " ");
    roleElement.className = "text-muted";
    roleElement.appendChild(roleText);

    var badgeElement = document.createElement("span");
    badgeElement.className = "badge bg-primary";
    var badgeText = document.createTextNode(user.badge);
    badgeElement.appendChild(badgeText);
    roleElement.appendChild(badgeElement);

    container.appendChild(roleElement);
  });
</script>




<?php     require_once 'inc/footer.inc.php';          ?>
