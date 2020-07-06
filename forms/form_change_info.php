<?php
    require '../config/database.php';

    session_start();
    if(isset($_POST['change_info']))
    {
        $username = trim($_POST['username']);
        $firstname = trim($_POST['FirstName']);
        $lastname = trim($_POST['LastName']);
        $email = trim($_POST['email']);

        $sql = $db_connect->prepare("UPDATE `Users` SET FirstName='$firstname', LastName='$lastname', username='$username' WHERE email='$email'");
        $sql->execute();

        if (empty($username) && empty($firstname) && empty($lastname) && empty($email))
        {
            echo 'You left one of the fields empty!'."<br>".'Please complete the required field even if the information is the same!';
        } 

        else
        {
            echo 'Congratulations!! Your New Identity has been Created!';
            header('refresh:3; url="../profile/profile.php"');
        }
    }
?> 