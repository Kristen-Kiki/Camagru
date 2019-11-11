<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <TITLE> CAMERA SHEET </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CAMERA_LINKS -->
    <link rel="stylesheet" href="css/camera.css">
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="css/navsystem.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="css/font.css">

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
            background-image: url("./img/alaska.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: 100%; 
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
            <a href="home.php"> <b> Home </b> </a> 
            <a href="#"> <b> Gallery </b> </a> 
            <a href="#"> <b> Profile </b> </a> 
            <a href="#"> <b> Account </b> </a> 
        </div>
    </nav>

    </section>
<header>
<h3> Let's Get Schwifty! <h3>
</header>

<!-- CAMERA -->
    <div class="booth">
        <video id="video" width="500" height="400"> </video>
    </div>
    
    <div>
         <a href="#" id="capture" class="booth_capture_btn">CAPTURE</a> <!-- button to take picture -->
    </div>

    <div class="booth">
        <canvas id="canvas" width="500" height="400"> </canvas> <!-- camera copies image taken -->
        <img id="photo" src="./img/picklerick.jpeg" width="500" height="400" alt="Sample Image"/> <!-- palceholder for when user wants to save an image-->
    </div>
    <script src="./js/camera.js"></script>

 </BODY>
</HTML>
