
<?php
    require '../config/database.php';
    
    if(isset($_POST['verify']))
    {
        $email = trim($_POST['email']);
               
        // echo 'Account Successfully Confirmed!';
        
        try
        { 
            $sql = "UPDATE users SET `Email_Confirmation` = 1 WHERE `email` = ?";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindParam(1, $email);
            if ($stmt->execute())
            {
            echo "E-mail Successfully Verified!";
            header('refresh:2; url="../registration/login.php"');
            exit();
            }

            else
            {
                echo "Verification Failed! Try to signup again!";
                header('refresh:3; url="../registration/signup.php"');
                exit();
            }
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        
        }
    } 
?>
