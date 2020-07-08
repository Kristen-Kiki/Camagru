<?php

    $host = "localhost";
    $user = "root";
    $pass = "wethinkcode";
    $db = "Camagru";

    try
    {
       $db_connect = new PDO("mysql:host=$host", $user, $pass);
       $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected to localhost <br/>";
    }

    catch (PDOException $e)
    {
        echo "error ".$e->getMessage();
    }
 
    try
    {
       $sql = "CREATE DATABASE ".$db;
       $db_connect->exec($sql);
       echo "Database created <br/>";
    }

    catch (PDOException $e)
    {
       echo "Failed to create database ".$e->getMessage();
    }

    try
    {
        //creating user database table
        $db_connect = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $user_table = "CREATE TABLE Users (
            UserID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(255) NOT NULL,
            LastName VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL, 
            Notifications BOOLEAN,
            Email_Confirmation BOOLEAN,
            Verification_Code INT(6) UNSIGNED NOT NULL,
            reg_date TIMESTAMP
        )";

        $db_connect->exec($user_table);
        echo "Table 'Users' successfully created";
        
        //creating image database table
        $img_table = "CREATE TABLE Images (
            ImageID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            UserID VARCHAR(30) NOT NULL, 
            username VARCHAR(100) NOT NULL,
            img_title TEXT,
            likes INT(11) UNSIGNED,
            img_base64 LONGBLOB NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $db_connect->exec($img_table);
        echo "Table 'Image' successfully created";

        //creating comments database table
        $comment_table = "CREATE TABLE Comments (
            CommentID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Commentator_Name VARCHAR(100) NOT NULL,
            comments TEXT,
            comm_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            ImageID INT(255)
            -- FOREIGN KEY (`ImageID`) REFERENCES `Images`(`ImageID`) ON DELETE CASCADE ON UPDATE CASCADE
        )";

        $db_connect->exec($comment_table);
        echo "Table 'Comment' successfully created";

        header('refresh:3; url="../index.php"');
    }

    catch(PDOException $e)
    {
        echo "Error creating table".$e->getMessage();
    }

    $db_connect = null;

?>