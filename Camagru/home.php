<?php

session_start();

?>


<!DOCTYPE HTML>
<HTML>
    
<HEAD>
    
    <meta charset="UTF-8">
    <TITLE> WELCOME TO CAMAGRU! </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- NAV_LINKS -->
    <link rel="stylesheet" href="./css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="./css/fonts.css">


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
    </script> <!-- END_NAV_FUNC -->

<!-- BG_IMG -->
    <style>
        body
        {
            background-image: url("./images/skagway.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover; 
        }
    </style>

</HEAD>

<BODY>
<section> 
    <nav>
<!-- NAV_SYSTEN -->
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()" hidden> &times; </a> 
            <br>
            <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
            <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
            <a href="./profile/profile.php"> <b> Account </b> </a>
            <a href="./gallery/camera.php"> <b> Editor </b> </a>
            <a href="./gallery/gallery.php"> <b> Gallery </b> </a> 
            <a href="./registration/logout.php"> <b> Logout </b> </a> 
           
           <!-- <form action="./registration/logout.php" method="POST">
            <button type="submit" name="logout"> Logout </button>
           </form> -->
        </div>
    </nav>
   </section>

<article>
    <header>
        <b> Camagru </b> 
        <h2> Let's get Schwifty! </h2>
    </header>
</article>

</BODY>

</HTML>



<?php

    require "./footer.php"

?>
