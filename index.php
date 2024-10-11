<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Easter Holiday's</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" 
          integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" 
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
    <header>
        <img class="header-image" src="assets/barka-header.png" alt="Barka Header">
        <nav>
            <a href="index.php?page=0" class="home-button"   >HOME</a>
            <a href="index.php?page=1" class="contact-button">CONTACT</a>
            <a href="index.php?page=2" class="game-button"   >GAME</a>
            <a href="index.php?page=3" class="finders-button">FINDER'S</a>
        </nav>
        <div class="header-logo">
            <h1>EASTER Holiday's</h1>
        </div>
    </header>
    <aside>
        <?php $page = $_GET["page"];
            if      ($page==0)  include("home.php");
            elseif  ($page==1)  include("contact.php");
            elseif  ($page==2)  include("game.php");
            elseif  ($page==3)  include("finders.php");
            else                include("404.php");
        ?>
    </aside>
    <main>
        <div class="myMain">
            <div id="control-panel">
                <div class="left-button">
                    <img id="counter" class="element" src="assets/counter.png" alt="Counter">
                    <span id="mine-count" class="number">000</span>
                </div>
                <img id="action-button" class="center-button" src="assets/button-start.png" alt="Button">
                <div class="right-button">
                    <img id="timer" class="element" src="assets/counter.png" alt="Counter">
                    <span id="time" class="number">000</span>
                </div>
            </div>
            <canvas id="myCanvas"></canvas>
        </div>
    </main>
    <footer>
        <div class="footer-text">
            <h4 class="left">All rights reserved ~ By<a href="https://www.viktormihalyjozsa.com/"  target="_blank" class="vmj-icon left"> VMJ </a></h4>
            <h4 class="left">from<a href="https://hu.codeberryschool.com/?referral_code=3GD4HJ"  target="_blank" class="audio-text left"> Peter Thomas</a> ~ 2024</h4>
            <audio controls="controls" loop="loop">
                <source src="music/children-s-songs-and-nursery-rhymes.mp3" type="audio/mpeg">
                <source src="music/children-s-songs-and-nursery-rhymes.ogg" type="audio/ogg">
                <source src="music/children-s-songs-and-nursery-rhymes.wav" type="audio/wav">
            </audio>
            <h5 class="right">Music:<a href="https://www.youtube.com/@HeyKids_hu" target="_blank" class="audio-text right"> HeyKids</a></h5>
            <h5 class="right"><a href="https://www.youtube.com/watch?v=fW1dqNK2FXI" target="_blank" class="audio-text right">Children's songs and ...</a></h5>
        </div>
        <div class="footer-image"></div>
    </footer>
        <img id="hidden" src="assets/hidden.png" style="display: none;" alt="Hidden">
        <img id="mine" src="assets/mine.png" style="display: none;" alt="Mine">
        <img id="exploded-mine" src="assets/exploded-mine.png" style="display: none;" alt="Exploded Mine">
        <img id="field-0" src="assets/0.png" style="display: none;" alt="0">
        <img id="field-1" src="assets/1.png" style="display: none;" alt="1">
        <img id="field-2" src="assets/2.png" style="display: none;" alt="2">
        <img id="field-3" src="assets/3.png" style="display: none;" alt="3">
        <img id="field-4" src="assets/4.png" style="display: none;" alt="4">
        <img id="field-5" src="assets/5.png" style="display: none;" alt="5">
        <img id="field-6" src="assets/6.png" style="display: none;" alt="6">
        <img id="field-7" src="assets/7.png" style="display: none;" alt="7">
        <img id="field-8" src="assets/8.png" style="display: none;" alt="8">
        <img id="flag" src="assets/flag.png" style="display: none;" alt="Flag">
        <img id="flagged-wrong" src="assets/flagged-wrong.png" style="display: none;" alt="Flagged Wrong">
        <script src="js/finder.js"></script>
</body>
</html>