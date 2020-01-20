<?php
    require "../config/database.php";

    if(isset($_POST['register']))
    {
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if($password != $confirm_password)
        {
            header("Location: ./registration/signup.php?error=PasswordCheck&FirstName=".$firstname."&LastName=".$lastname."&username=".$username."&mail=".$email);
            exit();
        }

        if(strlen($password) < 8)
        {
            header("Location: ./registration/signup.php?error=PasswordTooShort&FirstName=".$firstname."&LastName=".$lastname."&username=".$username."&mail=".$email);
            exit();
        }

        if (!preg_match("#[0-9]+#",$password))
        {
            header("Location: ./registration/signup.php?error=PasswordMustContainNumbers=".$firstname."&LastName=".$lastname."&username=".$username."&mail=".$email);
            exit();
        }

        if (!preg_match("#[a-z]+#",$password))
        {
            header("Location: ./registration/signup.php?error=PasswordMustContainLowercase=".$firstname."&LastName=".$lastname."&username=".$username."&mail=".$email);
            exit();
        }

        if (!preg_match("#[A-Z]+#",$password))
        {
            header("Location: ./registration/signup.php?error=PasswordMustContainUppercase=".$firstname."&LastName=".$lastname."&username=".$username."&mail=".$email);
            exit();
        }
        
        try
        {
            $sql = "SELECT COUNT(email) AS num FROM Users WHERE email = :email";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($row['num'] > 0)
            {
            echo "Signup Successful";
            header('refresh:5; url="../registration/login.php"');
            exit();
            }
           
            $Verification_Code = rand(100000, 999999);
            $link = "http://localhost:8080/Camagru/profile/verify_acc.php?user=".$username."&Verification_Code
            =".$Verification_Code;
            $subject = "Welcome to Camagru! Let's get you started!";
            $message = "Your Verification Link is: 
            
            ".$link;
            $header="From: noreply@camagru.com \r\n";
            
            if (mail($email,$subject,$message,$header))
            {
                $password = md5($password);
                $stmt = $db_connect->prepare("INSERT INTO Users (FirstName, LastName, email, username, password, Notifications, Email_Confirmation, Verification_Code)
                    VALUES (:FirstName, :LastName, :email, :username, :password, true, false, '$Verification_Code')");
                $stmt->execute(array(
                    ':FirstName' => $firstname,
                    ':LastName' => $lastname,
                    ':email' => $email,
                    ':username' => $username,
                    ':password' => $password));
                echo "Email confimation link has been sent to ".htmlspecialchars($email);
                header('refresh:5; url="../registration/login.php"');
                exit();
            }

            else
            {
                echo 'failed';
            }
        }
        
        catch(PDOException $e)
        {
            echo $e->getMessage();
        
        }
    }
?>