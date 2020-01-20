<?php
    require '../config/database.php';
    
    if(isset($_POST['change_pwd']))
    {

        $email = base64_decode(trim($_POST['email']));
        $username = trim($_POST['username']);
        $new_password = trim($_POST['newpassword']);
        $confirm_new_password = trim($_POST['confirm_new_password']);
        
        if($new_password !== $confirm_new_password)
        {
            alert("Passwords do not match!");
            header('refresh:5; url="./profile/pwd_reset.php"');
            exit();
        }

        if(strlen($new_password) < 8)
        {
            alert("Password must be a minimum of 8 characters!");
            header('refresh:5; url="./profile/pwd_reset.php"');
            exit();
        }

        if (!preg_match("#[0-9]+#",$new_password))
        {
            alert("Your password must contain at least 1 number!");
            header('refresh:5; url="./profile/pwd_reset.php"');
            exit();
        }

        if (!preg_match("#[a-z]+#",$new_password))
        {
            alert("Your password must contain at least 1 lower-case letter!");
            header('refresh:5; url="./profile/pwd_reset.php"');
            exit();
        }

        if (!preg_match("#[A-Z]+#",$new_password))
        {
            alert("Your password must contain at least 1 upper-case letter!");
            header('refresh:5; url="./profile/pwd_reset.php"');
            exit();
        }

        else
        {
            $new_password = md5($new_password);
            $sql = $db_connect->prepare("UPDATE `Users` SET password='$new_password' WHERE email='$email'");
            $sql->execute();
            echo 'Your New Access Code has Successfully been Changed! Please Verify your Account!';
            header('refresh:3; url="../registration/verify_acc.php"');
            exit();
        }
    }
?>