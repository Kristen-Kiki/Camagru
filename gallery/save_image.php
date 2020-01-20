<?php
    require '../config/database.php';
    // require '../js/camera.js';
    session_start();
    echo "<img src='".$_POST['Save']."'>";
    $picture = $_POST['Save'];
        $e=0;

        try
        {
            // print_r($_SESSION);
            $user = $_SESSION['login'];
            $tmp = $db_connect->query("SELECT * FROM Users");
                while ($row = $tmp->fetch())
                {
                    if ($row['username'] === $user)
                    {
                        $name = $row['username'];
                        $e = 1;
                        break ;
                    }
                }
                if ($e == 1)
                {
                    $sql = "INSERT INTO Images (UserID, username, img_base64, likes) 
                            VALUES ('$user','$name','$picture','0')";
                    $db_connect->exec($sql);
                    // echo "something here";
                    $header = 'Saving your picture to the Camagru Database';
                    $message = 'Your image has been successfully uploaded to our database!';
                    mail("$email", "$header", "$message");
                    echo "Your Image has been uploaded to our database!";
                    header('refresh:3; url="./gallery.php"');
                }
        }
        catch(PDOException $e)
        {
            echo $db_connnect . "<br>" . $e->getMessage();
        }
?>