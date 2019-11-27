<?php
	require '../config/database.php';
	include './get_images.php';
	
?>
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
            <!-- <a href="../gallery/gallery.php"> <b> Gallery </b> </a>  -->
            <a href="../registration/logout.php"> <b> Logout </b> </a> 
        </div>
    </nav>
 </section>
<div>
    <h3> Nobody exists on Purpose! <h3>
    <hr width="75%">
</div>

    <?php
			if ($_SESSION['Email_Confirmation'] == '0')
			{
                echo "You account needs to be verified to use the editor";
				echo "Please verify your account and try again";
                header('refresh:5; url="signup.php"');
            }
            
			else  
			{
				$images = get_imgs();
			}
        ?>

 </BODY>
</HTML>

<?php

    require "../footer.php"

?>
