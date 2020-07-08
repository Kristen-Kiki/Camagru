<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <TITLE> CAMERA SHEET </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CAMERA_LINKS -->
    <link rel="stylesheet" href="../css/camera.css">
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">

<!-- NAV_FUNC-->
    <script>
        function openNav()
        {
            document.getElementById('menu').style.width='250px';
            document.getElementById('opennav').style.width='250px';
        }

        function closeNav()
        {
            document.getElementById('menu').style.width='0px';
            document.getElementById('opennav').style.width='0px';
            
        }
    </script> <!-- END_nav_system -->

<!-- BG_IMG -->
    <style>
        body
        {
            background-image: url("../images/alaska.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover; 
            opacity: 6px;
        }
    </style>

</HEAD>
<BODY>
<section> 
    <nav>
<!-- NAV_SYSTEN -->
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
            <br>
            <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
            <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
            <a href="../profile/profile.php"> <b> Account </b> </a>
            <a href="../gallery/camera.php"> <b> Editor </b> </a>
            <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
            <a href="../registration/logout.php"> <b> Logout </b> </a> 
        </div>
    </nav>

    </section>
<header>
<h3> Let's Get Schwifty! <h3>
</header>




<!-- CAMERA -->
<div class="booth"><!-- button to take picture -->
<video id="videoElement" class="booth_flip" width="530" height="410" autoplay> </video>
<button type="submit" id="capture" class="booth_capture_btn" name="Capture"> Capture</button>
</div>

<div class="booth"><!-- camera copies image taken -->
<canvas id="canvas" width="530px" height="410px"></canvas> 
<!-- <img id="photo" src="../images/picklerick.jpeg" width="530" height="410" alt="Sample Image"/> -->
</div>

<div class="booth">
    <form action="../gallery/save_image.php" method="POST">
    <button type="submit" id="upload" class="booth_capture_btn" name="Save"> Save Image </button>
</form>
</div>
<script async src="../js/camera.js"></script>

<div class="">
    <button onclick="add_filters(0);"><img class="stickers" src="../filters/crown.png" width="200" height="200" alt="crown"></button>
    <button onclick="add_filters(1);"><img class="stickers" src="../filters/beard.png" width="200" height="200" alt="beard"></button>
    <!-- <button onclick="add_filters(2);"><img class="stickers" src="../filters/rick_and_morty_emoji_face.png" alt="uni"></button> -->
  
</div>
</BODY>
</HTML>

<?php

    require "./footer.php"

?>
