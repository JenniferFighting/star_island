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
        <!--<img src="assets/pictures/Perso2-removebg-preview.png" alt="">!-->
        <div id="timer"></div>
        <div class="socialMedia">
            <ul class="active">
                <li><a href=""><img src="assets/pictures/instagram_color.png" alt="instagram"></li></a>
                <li><a href=""><img src="assets/pictures/facebook (3).png" alt="facebook"></li></a>
                <li><a href=""><img src="assets/pictures/tik-tok.png" alt="tiktok"></li></a>
                <li><a href=""><img src="assets/pictures/logo_discord.png" alt="discord"></li></a>
                <li><a href=""><img src="assets/pictures/twitter.png" alt="twitter"></li></a>
                <li><a href=""><img src="assets/pictures/twitch.png" alt="twitch"></li></a>
                <li><a href=""><img src="assets/pictures/youtube.png" alt="youtube"></li></a>
            </ul>
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
</body>

</html>