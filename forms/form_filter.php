
<?php
    require '../config/database.php';

    session_start();

    $picture = $_POST['img3'];
        $e=0;
        try
        {
            $user = $_SESSION['login'];
            $tmp = $db_connect->query("SELECT * FROM Users");
                while ($row = $tmp->fetch())
                {
                    if ($row['email'] === $user)
                    {
                        $email = $row['email'];
                        $e = 1;
                        break ;
                    }
                }
                if ($e == 1)
                {
                    $sql = "INSERT INTO Images (UserID, email, img_base64, likes) 
                        VALUES ('$user','$email','$pic','0')";
                    $db_connect->exec($sql);
                    echo 'Image succesfully uploaded';
                    header('refresh:1; url="../profile/profile.php"');
                }
        }
        catch(PDOException $e){
            echo $db_connnect . "<br>" . $e->getMessage();
        }
?>