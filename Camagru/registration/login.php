
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> Join Camagru </title>
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
                <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
                <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
                <!-- <a href="../profile/profile.php"> <b> Account </b> </a>
                <a href="../gallery/camera.php"> <b> Editor </b> </a> -->
                <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
                <!-- <a href="../registration/logout.php"> <b> Logout </b> </a>  -->
            </div>
        </nav>
    </section>

<div>
    <h3> Welcome back Earthling... </h3>
    <hr width="75%">

<br/>  <br/>
<!-- LOGIN_FORM -->
    <div class="loginbooth">
        <form action="../forms/form_login.php" method="post" align="center">
            <label for="username"> Alias: </label> <br/>
                <input type="text" name="username" placeholder="Username - Kiki" required> <br/>
            <label for="password"> Access Code: </label> <br/>
                <input type="password" name="password" placeholder="Password" required> <br/>
            <button type="submit" class="button button1" name="login"> Login </button>
        </form>
    </div>
    <br/>

<!-- SIGNUP_FORM -->
    <div class="loginbooth">
        <form action="./signup.php" method="post" align="center">
            <button type="submit" class="button button1" name="register"> Not a Member? </button>
        </form>
    </div>
    <br/>

<!-- FORGOT_PASSWORD -->
    <div class="loginbooth">
        <form action="../profile/pwd_forgot.php" method="post" align="center">
        <input type="email" name="email" placeholder="email" required> <br/>
            <button type="submit" class="button button1" name="pwd_forgot"> &#128563; Wubba Lubba Dub Dub! I Forgot My Password</button>
        </form>
    </div>
</div>
    </body>
</html>

<?php
    // session_start();
    // echo $_SESSION['UserID'];
    require "./footer.php";
    ?>
