<?php
    require '../config/database.php';

    $text = trim($_POST['comments']);

    if (!empty($text))
    {
        session_start();

        $id = $_SESSION['login'];
        $reg_date = $_POST['hidden_txt'];
        $stmt = $db_connect->query('SELECT * FROM Comments');
        
        while ($row = $stmt->fetch())
        {
            if ($row['reg_date'] == $reg_date)
            {
                if (!empty($row['comments']))
                {
                    $comments = array();
                    $text = $id." : ".$_POST['comments'];
                    $comments = unserialize($row['comments']);
                    array_push($comments,$text);
                    $arr = serialize($comments);
                }

                else
                {
                    $text = $usr." : ".$_POST['comments'];
                    $comments = array($text);
                    $arr = serialize($comments);
                }

                $sql = "SELECT username, img_base64, comments, comm_reg_date, Commentator_Name
                JOIN Images on Images.ImageID = Comments.ImageID
                WHERE Comments.ImageID = $id";
                $sql = $db_connect->prepare($sql);
                $sql->execute();
                
                // $sql = "UPDATE images SET comments='$arr' WHERE reg_date='$reg'";
                
                // if($row['noti'] == true)
                // {
                    //     $email = $row['email'];
                    //     $header = 'Camagru || Comment Notification!';
                    //     $message = 'Click the Following Link '."<br>".'http://localhost:8080/eonwe/gallery.php?email=$email'."<br>".'To View Comment!';
                    //     mail("$email", "$header", "$message");
                    // }
                }
            }
        }
        header('refresh:0 url="../gallery/gallery.php"');

?>