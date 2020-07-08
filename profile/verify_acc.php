<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Account Verification!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
<!-- CAMERA_LINKS -->
    <link rel="stylesheet" href="../css/camera.css">
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
</head>
<body>

<!-- VERIFY_FORM -->
    <h3>Verify Your Account!</h3>
    <hr width="75%">

    <div class="loginbooth2">
        <form action="../forms/form_verify_acc.php" method="post" align="center">
            <input type="email" name="email" Placeholder="Insert your email address here to verify your account!" required>
            <button type="submit" class="button button1" name="verify"> YES, ITS ME! </button>
        </form>
    </div>
</body>
</html>

<?php

    require "../footer.php"

?>
