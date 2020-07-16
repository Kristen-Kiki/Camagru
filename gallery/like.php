
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

        while ($row = $stmt->fetch())
        {
            if ($row['ImageID'] == $ImageID)
            {
                $likes = intval($row['likes']) + 1;
                $database = "UPDATE Images SET likes='$likes' WHERE ImageID='$ImageID'";
                $stmt = $db_connect->prepare($database);
                $stmt->execute();

            }
        }
    }

    catch(PDOException $e)
    {
        echo $database . "<br>" . $e->getMessage();
    }
}
?>