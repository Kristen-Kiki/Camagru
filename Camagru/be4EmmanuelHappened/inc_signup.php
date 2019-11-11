<?php
    echo "Signup function called!";
    if(isset($_POST)) {
        $username = $_GET['uid'];
        $email = $_GET['mail'];
        $password = $_GET['pwd'];
        $password_c = $_GET['pwd_confirm'];

        echo "Values: " + $username + ", " + $email + ", " + $password + ", " + $password_c;
    }
?>