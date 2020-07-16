  
<?php
    require '../config/database.php';

    if (!isset($_SESSION['login']) || $_SESSION['login'] === "")
    header('Location: ../index.php');
    
    else
    {
        try
        {
            $stmt = $db_connect->query('SELECT * FROM Images');
            $ImageID = $_POST['hidden'];

            $delete_image = "DELETE FROM Images WHERE ImageiD='$ImageID' LIMIT 1";
            $db_connect->exec($delete_image);
            
            echo "Image has been deleted";
            header('refresh:1; url="./gallery.php"');
        }

        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
?>