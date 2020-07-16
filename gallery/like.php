
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
        $reg_date = $_POST['reg_date'];

        while ($row = $stmt->fetch())
        {
            // var_dump($row);
            // echo $ImageID;

            if ($row['ImageID'] == $ImageID)
            {
                // echo "hello";
                $likes = intval($row['likes']) + 1;
                $database = "UPDATE Images SET likes='$likes' WHERE ImageID='$ImageID'";
                $stmt = $db_connect->prepare($database);
                $stmt->execute();

            }
            // echo "You liked the image";
            header('refresh:1; url="./gallery.php"');
        }
    }

    catch(PDOException $e)
    {
        echo $database . "<br>" . $e->getMessage();
    }
}
?>