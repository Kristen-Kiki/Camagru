<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> Update Information </title>
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

<div>
    <?php
    require '../config/database.php';
        session_start();
        $username = ($_SESSION['username']);
    ?>
</div>

<div>
        
<h2>Used a Portal Gun?... Need New Identity?</h2>
<hr>

<br/>  <br/>
<!-- FORM TO CHANGE CREDENTIALS -->
<div class="loginbooth">    
        <form  method="POST" action="..forms/form_change_info.php" align="center">
            <label for="username">I want to be known as <?php echo $username ?></label> <br/>
                <input type="text" name="username" placeholder="New Username" required>
        <br/>
            <label for="email">  I changed my E-mail address to...  </label> <br/>
                <input type="email" name="email" placeholder="New E-mail" required>
        <br/> 
            <label for="FirstName"> I changed my Identity... My new name is...  </label> <br/>
                <input type="text" name="FirstName" placeholder="New Firstname" required>
        <br/> 
            <label for="lastname">  I am reborn... (or got married)... My new surname is...</label> <br/>
                <input type="text" name="lastname" placeholder="New Surname " required>
        <br/> 
        <button  name="change_info"> Update Details! </button>
        
        <!-- <div class="upd-div"><button type="submit" name="change" value="Update my details"></div> -->
        </form>
</div>

</body>
</html>

<?php
    require "../footer.php"
?>
 