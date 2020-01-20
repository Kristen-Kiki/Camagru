<?php
    require '../config/database.php';

    if(isset($_POST['change_info']))
    {
        $username = trim($_POST['username']);
        $firstname = trim($_POST['FirstName']);
        $lastname = trim($_POST['LastName']);
        $email = trim($_POST['email']);
        $sql = $db_connect->prepare("UPDATE `Users` SET FirstName='$firstname', LastName='$lastname', username='$username' WHERE email='$email'");
        $sql->execute();
        echo 'Congratulations!! Your New Identity has been Created!';
        header('refresh:5; url="../profile/profile.php"');
    }
?>