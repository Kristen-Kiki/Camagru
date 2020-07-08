<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <TITLE> CAMERA SHEET </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- NAV_LINKS -->
<link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">
<!-- FORM-LINKS-->
    <link rel="stylesheet" href="../css/form.css">

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
            background-image: url("../images/skagway.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover; 
        }
    </style>
</HEAD>
<BODY>
<section> 
<!-- NAV_SYSTEN -->
    <nav>
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
            <br>
            <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
            <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
            <a href="../profile/profile.php"> <b> Account </b> </a>
            <a href="../gallery/camera.php"> <b> Editor </b> </a>
            <a href="../gallery/gallery.php"> <b> Gallery  </b> </a> 
            <a href="../registration/logout.php"> <b> Logout </b> </a> 
        </div>
    </nav>
 </section>

<!-- CHANGE_PROFILE -->
 <h3>Your Life In Front of You!</h3>
    <hr width="75%">

<!-- VIEW_INFO -->
    <div class="loginbooth">
        <form action="./info.php" method="get" align="center">
            <button type="submit" class="button button1" name="change"> My Passport </button>
        </form>
    </div> <br/>

 <!-- UPDATE_INFO -->
    <div class="loginbooth">
        <form action="./update_info.php" method="post" align="center">
            <button type="submit" class="button button1" name="change_info"> Change My Identity </button>
        </form>
    </div> <br/>

 <!-- UPDATE_PASSWORD -->
    <div class="loginbooth">
        <form action="./pwd_reset.php" method="post" align="center">
            <button type="submit" class="button button1" name="change_pwd"> New Access Code </button>
        </form>
    </div>



</body>
</html>


 </BODY>
</HTML>

<?php

    require "../footer.php"

?>
