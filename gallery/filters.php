
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <TITLE> CAMERA SHEET </TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CAMERA_LINKS -->
    <link rel="stylesheet" href="../css/camera.css">
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="../css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="../css/fonts.css">
<!-- FORM-LINKS-->
    <link rel="stylesheet" href="../css/form.css">  
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
            <a href="../gallery/gallery.php"> <b> update  </b> </a> 
            <a href="../registration/logout.php"> <b> Logout </b> </a> 
        </div>
    </nav>
 </section>

<!-- CHANGE_PROFILE -->
 <h3>Your Whole Life In Front of You!</h3>
 <div id="">
    <form method="POST" action="../forms/form_filter.php" enctype="multipart/form-data">
        <img width="400" height="300" src="" alt="">
        <input type="file" name="img2" id="img2">
        <input type="hidden" name="img3" id="img3" value="">
        <button type="submit" class="button button1" name="insert" value="insert"> insert</button>
    </form>
</div>



<div id="">
    Preview
        <?php
            require '../config/database.php';
            session_start();
                try
                {
                    $stmt = $db_connect->query("SELECT * FROM Images");
                    while ($row = $stmt->fetch())
                    {
                        $newdate = date_format(date_create($row['reg_date']), 'D d M Y');
                        $figure = "<figure>";
                        $caption = "<figcation> <h3>".$row['UserID']."</h3><p>".$newd."</p>".htmlspecialchars($row['img_title'])."</figcaption>";
                        $imgage = "<img class=\"images\" name=\"".$row['img_title']."\" id=\"".$row['reg_date']." \"src=\"".$row['img_base64']."\" width=\"50%\">";
                        // $form = "<form name=\"".$row['reg_date']."\" action=\"like.php\" method=\"POST\"><input type=\"hidden\" name=\"page\" value=\"gallery\"><input type=\"hidden\" name=\"hidden\" value=\"".$row['reg_date']."\"><input type=\"submit\" name=\"btn\" value=\"likes : ".$row['likes']."\"></form>";
                        $commment = "<div><a href=\"http://localhost:8080/Camagru/gallery/del_image.php?reg_date=".$row['reg_date']."\"><button>DELETE</button></a></div>";
                        $figure2 = "</figure>";
                        echo $figure.$caption.$imgage.$commment.$figure2;
                    }
                }
                catch(PDOException $e)
                {
                    echo $db_connnect . "<br>" . $e->getMessage();
                }
    ?>
</div>
</body>
<footer >&copy;
    <a href="../profile/delete_acc.php"><div><button>Del Acc</button></div></a>
</footer>
<script src="../js/camera.js"></script>
</html>
<?php

    require "./footer.php"

?>
