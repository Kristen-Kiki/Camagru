  
<?php
    require '../config/database.php';

    $pic = $_GET['ImageID'];
    
    try
    {

        session_start();

        $UserID = $_SESSION['login'];
        $delete_image = "DELETE FROM Images WHERE ImageiD='$pic' LIMIT 1";
        $db_connect->exec($delete_image);
        
        echo "Image has been deleted";
        header('refresh:3; url="./gallery.php"');
    }

    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
?>