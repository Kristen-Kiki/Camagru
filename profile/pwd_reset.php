<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Reset Password || Camagru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
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

</head>
<body>
<!-- NAV_SYSTEN -->
<section> 
        <nav>
            <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
            
            <div id="menu" class="nav"> 
                <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
                <br>
                <a href="../index.php"> <b> Camagru </b> </a>
                <a href="../registration/login.php"> <b> Welcome Back </b> </a>
                <a href="../registration/signup.php"> <b> Access our Universe </b> </a>
                <!-- <a href="../profile/profile.php"> <b> Account </b> </a>
                <a href="../gallery/camera.php"> <b> Editor </b> </a> -->
                <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
                <!-- <a href="../registration/logout.php"> <b> Logout </b> </a>  -->
            </div>
        </nav>
    </section>

<!-- PWD_RESET_FORM -->
<div>
    <h3>Change your Access Code!</h3>
        <hr width="75%">

        <div class="loginbooth">
            <form action="../forms/form_pwd_reset.php" method="post" align="center">
                <label for="username"><b>Alias</b></label> <br/>
                    <input type="text" placeholder="Username" name="username" required><br/>
                <input type="hidden" name="email" value="<?php echo ($_GET['ID']);?>">
                <label for="pwd"><b>New Password</b></label><br/>
                    <input type="password" placeholder="Enter Password" name="newpassword" required><br/>
                <label for="pwd_confirm"><b>Confirm Password</b></label><br/>
                    <input type="password" placeholder="Confirm New Password" name="confirm_new_password" required><br/>
                <button type="submit" name="change_pwd" class="button button1">Update Password!</button>
            </form>
        </div>

</body>
</html>

<?php

    require "../footer.php"

?>
