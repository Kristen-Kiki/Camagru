<?php
    require '../config/database.php';
    
    session_start();
	if(isset($_POST['login']))
	{
        // print_r($_POST);
        $username = $_POST['username'];
        $password = $_POST['password'];

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
            echo 'You have successfully Logged In!';
            // echo $_SESSION['UserID'];
            header('refresh:3; url="../home.php"');
           
		}
		
		else
		{
            echo 'Incorrect email and Password combination!'."<br>".'OR'."<br>".'User Does Not Exist!'."<br/>"."OR"."<br/>"."Account Not Verified!(Check Registration email for verification Link!)";
            header('refresh:3; url="signup.php"');
        }
    }
?>