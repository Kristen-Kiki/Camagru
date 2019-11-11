<?php
require 'inc_db.php';

if (isset($_POST['signup_submit']))
{

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordConfirm = $_POST['pwd_confirm'];
echo  "values from form: " + $username + ", " + $email;


if (empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) //check if the user left any fields empty
{
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email); //sends user back to signin sheet with an error message
     exit(); //if user makes mistake in fields - stop script from running
}
  


else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) // if email and usernames are invalid
{
     header("Location: ../signup.php?error=invaliduidmail");
     exit();
 }
    

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // if emails are invalid
 {
     header("Location: ../signup.php?error=invalidmail&uid=".$username);
     exit();
 }



  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) // if passwords are invalid
  {
      header("Location: ../signup.php?error=invaliduid&mail=".$email);
      exit();
  }



 else if ($password !== $passwordConfirm) // if passwords are not matching
 {
      header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }



    else //username already taken - connect to database
    {
        $sql = "SELECT User_UID FROM user WHERE User_UID=?";
        $statement->initialize($connection);
        
       if (!$statement = $connection->prepare($statement, $sql))
      {
           header("Location: ../signup.php?error=sqlerror");
          exit();
     }

      else 
       {
            $statement->bindParam(':username', $username); //pass information from user into database
           $statement->execute();
           $statement->store_results($statement);
           $resultcheck = pdo_statement_num_rows($statement);

           if(resultcheck > 0) // check if the result is 0 or 1
           {
                header("Location: ../signup.php?error=useridtaken&mail=".$email);
               exit();
          }   

          else
          {
              $sql = "INSERT INTO user (User_UID, User_Email, User_PWD) VALUES (?, ?, ?)";
              $statement = $statement->initialize($connection);

             if (!$statement = $connection->prepare($statement, $sql)
              {
                  header("Location: ../signup.php?error=sqlerror");
                   exit();
              }
              else 
               {
                  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                 $statement->bindParam(':username', $username, $email, $hashedpassword);
                 $statement->execute();

                 header("Location: ../signup.php?signup=success");
                  exit();
               }
           }
      }  
   }
 $statement->close();
   $connection->close();
}

 else // if gained access to page without signing up -- send back to page
 {
     header("Location: ../signup.php?");
    exit();
}

?>