<?php
    function saved_images()
    {
        $server_name = "localhost";
        $db_username = "root";
        $db_password = "wethinkcode";
        $db_name = "camagru";

        try 
        {
            $db_connect = new PDO("mysql:host=$server_name;dbname=$db_name", $db_username, $db_password);
            $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $UserID = $_SESSION['UserID'];
            $sql = "SELECT `img_base64` FROM `Images` WHERE `UserID` = ?";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindParam(1, $UserID);
            $stmt->execute();
            $fetch = $stmt->fetchAll(PDO::FETCH_COLUMN);
            return ($fetch);
        }
        
        catch (PDOException $e)
        {
            echo "Connection to the Image Database failed: " .$e->getMessage();
        }
    }
?>