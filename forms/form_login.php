<?php
    require '../config/database.php';
    
    session_start();
	if(isset($_POST['login']))
	{
        // print_r($_POST);
        $password = $_POST['password'];
        $username = $_POST['username'];

        if (empty($username) || empty($password))
        {
            echo 'Please fill in all required fields!';
            header('refresh:3; url="../registration/login.php"');
            exit;
        }
        
        else
        {
            try
            {
                $password = md5($password);
                $query = $db_connect->prepare("SELECT `UserID` FROM `Users` WHERE `username` = '$username' AND `password` = '$password' ");
                $query->execute();
                $count = $query->rowCount();
                $result = $query->fetchAll(PDO::FETCH_COLUMN);
                
                // var_dump($result); ---get all info on variable
                if($count == "1")
                {
                    $_SESSION['login'] = $username;
                    $_SESSION['UserID'] = $result[0];
                    // echo $_SESSION['UserID'];
                    echo 'You have successfully Logged In!';
                    header('refresh:3; url="../home.php"');
                    exit;
                
                }
                
                else
                {
                    echo 'Incorrect email and Password combination!'."<br>".'OR'."<br>".'User Does Not Exist!'."<br/>"."OR"."<br/>"."Account Not Verified!(Check Registration email for verification Link!)";
                    header('refresh:3; url="../registration/login.php"');
                    exit;
                }
             }

             catch(PDOException $e)
             {
                 echo $e->getMessage();
             
             }
        }
    }
?>