  
<?php
    require '../config/database.php';

    $capture_date = $_GET['reg_date'];
    
    try
    {

        session_start();

        $UserID = $_SESSION['login'];
        $delete_image = "DELETE FROM Images WHERE reg_date='$capture_date' AND UserID='$UserID'";
        $db_connect->exec($delete_image);
        
        echo "Image has been deleted";
        header('refresh:3; url="./gallery.php"');
    }

    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
?>