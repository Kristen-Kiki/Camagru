
<?php
    require '../config/database.php';

    session_start();

    if (!isset($_SESSION['login']) || $_SESSION['login'] === "")
        header('Location: index.php');

    else{
        $reg_date = $_GET['reg_date'];
        $CommentID = $_SESSION['login'];
        $stmt = $db_connect->query('SELECT * FROM Comments');

        while ($row = $stmt->fetch())
        {
            if ($row['reg_date'] == $reg_date) 
            {
                $gallery = "<div id=\"nav\">
                            <a href=\"Gallery.php\">
                            <div>
                            </div></a></div>";

                $newDate = date_format(date_create($row['reg_date']), 'D D M Y');

                $figure = "<figure>";

                $caption = "<figcation> <h3>".$newDate." by ".$row['UserID']."</h3>
                            </figcaption>";

                $imgage = "<img class=\"images\" name=\"".$row['img_title']."\" id=\"".$row['reg_date']." 
                            \"src=\"".$row['img_base64']."\" width=\"50%\">";

                $form = "<form name=\"".$row['reg_date']."\" action=\"like.php\" method=\"POST\">
                        <input type=\"hidden\" name=\"page\" value=\"comment\">
                        <input type=\"hidden\" name=\"hidden\" value=\"".$row['reg_date']."\">
                        <input type=\"submit\" name=\"btn\" value=\"likes : ".$row['likes']."\">
                        </form>";

                $figure2 = "</figure>";

                echo $gallery.$figure.$caption.$imgag.$form.$figure2;
                echo "<div class=\"comme\">";

                if (isset($row['comments']))
                {
                    $com = array();
                    $com = unserialize($row['comments']);
                    foreach($com as $key=>$val)
                    {
                        echo htmlspecialchars($val)."<br/>";
                        
                        $header = "Comment";
                        $msgg = $val;
                        $text = "View comment @ http://localhost:8080/eonwe/Gallery.php";
                        mail($id,$header,$msgg,$text);
                    }
                }
                echo "</div>";
            }
        }
        echo "</body></html>";
    }
    ?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <TITLE> COMMENT SHEET </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CAMERA_LINKS -->
    <link rel="stylesheet" href="../css/camera.css">
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">
<!-- GALLERY_LINKS -->
    <link rel="stylesheet" href="../css/gallery.css">

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
        </script> <!-- END_nav_system -->

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

</HEAD>
<BODY>
<section> 
<!-- NAV_SYSTEN -->
    <nav>
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
            <br>
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
    <h3> Got Something To Say? <h3>
    <hr width="75%">
</div>
        <div class="loginbooth">
        <form  action="../forms/comment.php" method="POST" align="center">
                <input type="text" name="com" value="" required/>
                <input type="hidden" name="hidden_txt" value="".$reg_date.>
                <input type="hidden" name="id" value="".$id.>
                <button type="submit" class="button button1">i'm done! </button>
                </form>";
                </div>
    </body>
</html>
  
<?php

require "./footer.php"

?>
