<?php

if (isset($_POST['login-submit']))
{
    require 'inc_db.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password))
    {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
 
    else
    {
        $sql = "SELECT * FROM user WHERE User_UID=? OR User_Email=?;";
        $statement = pdo_statement_initialize($connection);
        if (!$statement = $connection->prepare($statement, $sql))
        {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }

        else
        {
            $statement->bindParam(':statement', $statement, $mailuid, $mailuid);
            $statement->execute();
            $result = pdo_statement_get_result($statement);

            if ($row = pdo_fetch_assoc($result))
            {  
                $passwordcheck = password_verify($password, $row['User_PWD']);
                if ($passwordcheck == false)
                {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
                else if ($passwordcheck == true) // log into website
                {
                    session_start();
                    $_SESSION['userid'] = $row['User_ID'];
                    $_SESSION['useruid'] = $row['User_UID'];

                    header("Location: ../index.php?login=sucess");
                     exit();
                }
            }

            else
            {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}

else
{
    header("Location: ../index.php");
    exit();
}

?>