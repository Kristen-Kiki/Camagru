<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> Update Information </title>
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
                <!-- <a href="../index.php"> <b> Camagru </b> </a> -->
                <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
                <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
                <a href="../profile/profile.php"> <b> Account </b> </a>
                <a href="../gallery/camera.php"> <b> Editor </b> </a>
                <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
                <a href="../registration/logout.php"> <b> Logout </b> </a> 
            </div>
        </nav>
    </section>
    <?php
    require '../config/database.php';
        session_start();
        $username = ($_SESSION['username']);
    ?>

<div>
        
<h3>Need New Identity?</h3>
<hr>

<br/>  <br/>
<!-- FORM TO CHANGE CREDENTIALS -->
<div class="loginbooth">    
        <form  method="POST" action="..forms/form_change_info.php" align="center">
            <label for="username">I want to be known as... <?php echo $username ?></label> <br/>
                <input type="text" name="username" placeholder="New Username" required>
        <br/>
            <label for="email">  My new E-mail address is...  </label> <br/>
                <input type="email" name="email" placeholder="New E-mail" required>
        <br/> 
            <label for="FirstName"> My new Name is...  </label> <br/>
                <input type="text" name="FirstName" placeholder="New Firstname" required>
        <br/> 
            <label for="lastname"> My new Surname is...</label> <br/>
                <input type="text" name="lastname" placeholder="New Surname " required>
        <br/> 
        <button class="button button1" name="change_info"> Update Details! </button>
        
        <!-- <div class="upd-div"><button type="submit" name="change" value="Update my details"></div> -->
        </form>
</div>

</body>
</html>

<?php
    require "../footer.php"
?>
 