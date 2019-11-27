
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
                <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a>
                <a href="./registration/signup.php"> <b> Access our Universe </b> </a>
                <a href="../profile/profile.php"> <b> Account </b> </a>
                <a href="../gallery/camera.php"> <b> Editor </b> </a> -->
                <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
                <!-- <a href="../registration/logout.php"> <b> Logout </b> </a>  -->
            </div>
        </nav>
    </section>

<div>
    <h3> Not a member yet? -- Join Camagru... </h3>
    <hr width="75%">

<br/>
<!-- SIGN IN_FORM -->
    <div class="loginbooth">
        <form action="../forms/form_signup.php" method="post" align="center">
            <label for="FirstName"> First Name: </label> <br/>
                <input type="text" name="FirstName" placeholder="First Name" required> <br/>
            <label for="LastName"> Surname: </label> <br/>
                <input type="text" name="LastName" placeholder="Surname" required> <br/>
            <label for="LastName"> Alias: </label> <br/>
                <input type="text" name="username" placeholder="Username" required> <br/>
            <label for="LastName"> E-mail: </label> <br/>
                <input type="email" name="email" placeholder="E-mail" required> <br/>
            <label for="LastName"> Password: </label> <br/>
                <input type="password" name="password" placeholder="Password" required> <br/>
            <label for="LastName"> Confirm Password: </label> <br/>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required> <br/>
            <button type="submit" class="button button1" name="register"> Join Now! </button>
        </form>
    </div>
    <br/>

<!-- LOGIN_FORM -->
    <div class="loginbooth">
        <form action="./login.php" method="post" align="center">
        <button type="submit" class="button button1" name="register"> Already a Member? </button>
        </form>
    </div>

</div>
</body>
</html>

<?php
    require "../footer.php"
?>
