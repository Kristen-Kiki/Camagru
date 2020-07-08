<?php
require '../config/database.php';

session_start();
//require './includes/login.inc.php';
$id = $_SESSION['UserID'];
$FirstName = $_SESSION['FirstName'];
$lastName = $_SESSION['LastName'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];


$sql = "SELECT * FROM Users WHERE UserID= $id";
$stmt = $db_connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
// echo "<br>";
// echo "<br>";

// echo $id;
// echo "<br>";
// echo $result['email'];
// echo "<br>";
// echo $result['FirstName'];
// echo "<br>";
// echo $result['LastName'];
// echo "<br>";
// echo $result['username'];


?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <title> Profile Information </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- NAV_LINKS -->
<link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">
<!-- FORM-LINKS-->
    <link rel="stylesheet" href="../css/form.css">

<!-- NAV_FUNC-->
    <script>
        function openNav()
        {
            document.getElementById('menu').style.width='250px';
            document.getElementById('opennav').style.width='250px';
        }

        function closeNav() 
        {
            document.getElementById('menu').style.width='0px';
            document.getElementById('opennav').style.width='0px';
            
        }
    </script> <!-- END_NAV_FUNC -->

<!-- BG_IMG -->
    <style>
        body
        {
            background-image: url("../images/skagway.jpg");
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover; 
        }
    </style>

</head>
<body>
<!-- NAV_SYSTEN -->
<section> 
        <nav>
            <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
            
            <div id="menu" class="nav"> 
                <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
                <br>
                <!-- <a href="../index.php"> <b> Camagru </b> </a> -->
                <!-- <a href="./registration/login.php"> <b> Welcome Back </b> </a> -->
                <!-- <a href="./registration/signup.php"> <b> Access our Universe </b> </a> -->
                <a href="../profile/profile.php"> <b> Account </b> </a>
                <a href="../gallery/camera.php"> <b> Editor </b> </a>
                <a href="../gallery/gallery.php"> <b> Gallery </b> </a> 
                <a href="../registration/logout.php"> <b> Logout </b> </a> 
            </div>
        </nav>
    </section>

<div>
    <h3> <?php echo $result['username']; ?> </h3>
    <hr width="75%">

    <div class="loginbooth">
<table align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td valign="center"> First Name: </td>
            <td class="button1"> <?php echo $result['FirstName']; ?> </td>
        </tr>
    </table>
</div>
    <br/>
    <div class="loginbooth">
    <table align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td> Surname: </td>
            <td class="button1"> <?php echo $result['LastName']; ?> </td>
        </tr>
        </table>
     </div>
     <br/>
     <div class="loginbooth">
    <table align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td> Username: </td>
            <td class="button1"> <?php echo $result['username']; ?> </td>
        </tr>
        </table>
     </div>
     <br/>
    <div class="loginbooth">
    <table align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td > Email Address: </td>
            <td class="button1"> <?php echo $result['email']; ?> </td>
        </tr>
        </table>
    </div>
</div> 
<!-- UPDATE_INFO -->
<div class="loginbooth">
        <form action="./update_info.php" method="post" align="center">
        <label> The above information is incorrect! </label>  <br/>
        <button type="submit" class="button button1" name="change_info"> Edit </button>
        </form>
    </div>
<br/>  <br/>

</body>
</html>


<?php
    require "../footer.php"
?>
