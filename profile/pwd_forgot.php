<?php
    require '../config/database.php';

    if(isset($_POST['pwd_forgot']))
    {
        try
        {
            $email = trim($_POST['email']);
            $username = trim($_POST['username']);
            $check_username = $db_connect->prepare("SELECT `username` FROM `Users` WHERE `username`=?");
            $check_username->bindParam(1, $username);
            $check_username->execute();
            
            // echo base64_encode($email);

            if($check_username->execute())
            {

                $header = "From: noreply@camagru.com \r\n";
                $subject = "Camagru Password Reset";
                $message = 'Click on the following link to Reset Your Password! 
                            http://localhost:8080/Camagru/profile/pwd_reset.php?ID=' . base64_encode($email);
            
                if (!mail($email, $subject, $message, $header))
                {
                    echo error_get_last()['message'];
                    exit();
                }
                
                else
                {
                    echo 'Password Reset Link has been sent to your E-mail';
                    header('refresh:3; url="../profile/verify_acc.php"');
                    die();
                }
            }
        }

        catch (PDOexception $e)
        {
            echo $e->getMessage ();  
            exit();
        }
           
    }

    else
    {
        echo 'Username does not Exist! Try signing up';
        header('refresh:5; url="../registration/signup.php"');
    }
    
?>