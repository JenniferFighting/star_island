<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teaser</title>
    <link rel="stylesheet" href="assets/css/teaser.css">

</head>

<body>

    <main>
            <div class="container">

             <img width="500" class="logo" src="assets/pictures/starisland.png">

            
            <audio src="assets/pictures/Roddy_Ricch_-_Bacc_Seat_feat._Ty_Dolla_ign_Official_Audio.mp3" id="mon-audio"></audio>
            <button class="center-button"onclick="toggleAudio()">Play/Pause</button>
            </div>


        <div class ="presentation">
                    <h2>Bienvenue dans GTA V RP Free-to-Play</h2>
                    <p>L'expérience ultime de jeu de rôle en ligne !</p>
                    <p>Plongez dans un monde immersif et captivant de simulation réaliste où vous pouvez créer votre propre destinée. </p>
                    <p>Incarnez un justicier de Los Santos, ou un chef de gang. </p>
                    <p>Rejoignez une communauté passionnée. À vous de jouer !</p>
                </div>

    
        <div id="timer"></div>

        

             <div class="container-socialMedia">

                <div class="socialMedia">
                        <a href="" class="icon_social"><img src="assets/pictures/instagram_color.png" alt="instagram"></a>
                        <a href="" class="icon_social"><img src="assets/pictures/facebook (3).png" alt="facebook"></a>
                        <a href="" class="icon_social"><img src="assets/pictures/tik-tok.png" alt="tiktok"></a>

                        <img src="assets/pictures/logo_discord.png" alt="discord" id="discord">

                        <a href="" class="icon_social"><img src="assets/pictures/twitter.png" alt="twitter"></a>
                        <a href="" class="icon_social"><img src="assets/pictures/twitch.png" alt="twitch"></a>
                        <a href="" class="icon_social"><img src="assets/pictures/youtube.png" alt="youtube"></a>
                </div>
            </div>    
    </main>


 <script type="text/javascript">

        var Affiche = document.getElementById("timer");

        function Rebour() {
            var date1 = new Date();
            var date2 = new Date("Jun 30, 2023 00:00:00");
            var sec = (date2 - date1) / 1000;
            var n = 24 * 3600;
            if (sec > 0) {
                j = Math.floor(sec / n);
                h = Math.floor((sec - (j * n)) / 3600);
                mn = Math.floor((sec - ((j * n + h * 3600))) / 60);
                sec = Math.floor(sec - ((j * n + h * 3600 + mn * 60)));
                Affiche.innerHTML = j + " j " + h + " h " + mn + " min " + sec + " s";
                window.status = "Temps restant : " + j + " j " + h + " h " + mn + " min " + sec + " s ";
            }
            tRebour = setTimeout("Rebour();", 1000);
        }
        Rebour();
    </script>

    <script>
        var audio = document.getElementById("mon-audio");
            function toggleAudio() {
                if (audio.paused) {
                     audio.play();
                     } else {
                        audio.pause();
                     }
             }
    </script>


</body>

</html>