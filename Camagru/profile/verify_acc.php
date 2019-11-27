
<?php
    require '../config/database.php';
    
    if(isset($_POST['verify']))
    {
        $email = trim($_POST['email']);
        $sql = $db_connect->prepare("UPDATE `Users` WHERE email='$email'");
        $sql->execute();
        
        echo 'Account Successfully Confirmed!';
        
        $stmt = $db_connect->prepare($sql);
        $sql = "UPDATE 'Users' SET 'Email_Confirmation' = 1 WHERE 'Verification_Code' = ?";
        $stmt->bindParam(1, $_GET['Verification_Code']);
        
        if ($stmt->execute())
        {
            echo "Verified Successfully!";
            header('refresh:5; url="login.php"');
            exit();
        }
        else
        {
            echo "Verification Failed! Try to signup again!";
            header('refresh:5; url="signup.php"');
            exit();
        }
    }
?>

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
        <form action="../registration/login.php" method="post" align="center">
            <input type="email" name="email" Placeholder="Insert your email address here to verify your account!" required>
            <button type="submit" class="button button1" name="verify"> YES, ITS ME! </button>
        </form>
    </div>
</body>
</html>

<?php

    require "../footer.php"

?>
