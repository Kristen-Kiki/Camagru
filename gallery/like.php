
<?php

require '../config/database.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] === "")
    header('Location: ../index.php');
 

else
{
    try
    {
        $stmt = $db_connect->query('SELECT * FROM Images');
        $id = $_POST['hidden'];

        while ($row = $stmt->fetch())
        {
            if ($row['id'] == $id)
            {
                $likes = intval($row['likes']) + 1;
                $database = "UPDATE Images SET likes='$likes' WHERE id='$id'";
                $stmt = $db_connect->prepare($database);
                $stmt->execute();

                if ($_POST['page'] === 'gallery')
                    header('Location: ../gallery/gallery.php');

                else if ($_POST['page'] === 'profile')
                    header('Location: ../profile/profile.php');

                else if ($_POST['page'] === 'comment')
                {
                    $li = "http://localhost:8080/gallery/comment.php?reg_date=".$row['reg_date'];
                        header('Location: '.$li);
                }
            }
        }
    }

    catch(PDOException $e)
    {
        echo $database . "<br>" . $e->getMessage();
    }
}
?>