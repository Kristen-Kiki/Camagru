  
<?php
    require '../config/database.php';
    $reg = $_GET['reg_date'];
    try{

        session_start();
        $usr = $_SESSION['signin'];
        $stmt = "DELETE FROM Images WHERE reg_date='$reg' AND UserID='$usr'";
        $db_connect->exec($stmt);
        echo "Image has been deleted successfully";
        header('refresh:3; url="profile.php"');
    }

    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
?>