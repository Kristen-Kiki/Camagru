
<?php
    require '../config/database.php';
    if(isset($_POST['del']))
    {
        $email = trim($_POST['email']);
        $sql = $db_connect->prepare("DELETE FROM `Users` WHERE email='$email'");
        $sql->execute();
        echo '&#128577 Your account has been successfully deleted!';
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    
    <title>Delete My Account</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- NAV_LINKS -->
<link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">
    


<!-- BG_IMG -->
<style>
        body
        {
            background-image: url("../images/alaska.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover; 
            opacity: 6px;
        }
</style>

</head>
<body>
    <div id="">
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Insert You Email Address!" required>
            <button name="del"><b>DELETE MY ACCOUNT!</b></button>
        </form>
    </div>
</body>
</html>