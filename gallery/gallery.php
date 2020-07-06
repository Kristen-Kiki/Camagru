<?php
	require '../config/database.php';
	include './get_images.php';
	
?>
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
            <!-- <a href="../gallery/gallery.php"> <b> Gallery </b> </a>  -->
            <a href="../registration/logout.php"> <b> Logout </b> </a> 
        </div>
    </nav>
 </section>
<div>
    <h3> Nobody exists on Purpose! <h3>
    <hr width="75%">
</div>

    <!-- <?php
			// if ($_SESSION['Email_Confirmation'] == '0')
			// {
            //     echo "You account needs to be verified to use the editor";
			// 	echo "Please verify your account and try again";
            //     header('refresh:5; url="signup.php"');
            // }
            
			// else  
			// {
			// 	$images = get_imgs();
			// }
        ?> -->

<!-- IMAGE_DISPALY -->    
    <div id="image_display">
        <?php
            
            session_start();

            try
            {
                $stmt = $db_connect->query("SELECT * FROM Images");

                while ($row = $stmt->fetch())
                {
                    $newDate = date_format(date_create($row['reg_date']), 'D d M Y');

                    $id = $row['id'];

                    $figure = "<figure>";

                    $caption = "<figcation> 
                                <h4>".$row['UserID']."</h4>
                                <p>".$newDate."</p>"
                                .htmlspecialchars($row['img_title']).
                                "</figcaption>";

                    $imgage = "<img class=\"images\" name=\"".$row['img_title'].
                                "\" id=\"".$row['id'].
                                "\"src=\"".$row['img_base64'].
                                "\" width=\"30%\">";

                    $form = "<form name=\"".$row['reg_date']."\" action=\"like.php\" method=\"POST\">
                            <input type=\"hidden\" name=\"page\" value=\"gallery\">
                            <input type=\"hidden\" name=\"hidden\" value=\"".$row['id']."\">
                            <input type=\"submit\" name=\"btn\" value=\"likes : ".$row['likes']."\">
                            </form>";

                    $comment = "<form action=\"../forms/comment.php\" method=\"POST\">
                            <input type=\"text\" name=\"com\" value=\"\" required/>
                            <input type=\"hidden\" name=\"hidden_txt\" value=\"\".$reg_date.\"\">
                            <input type=\"hidden\" name=\"id\" value=\"\".$id.\"\">
                            <button type=\"submit\" class=\"button button1\"> Comment </button>
                            </form>";

                    $delete = "<form name=\"".$row['reg_date']."\"action=\"del_image.php\" method=\"POST\">
                            <input type=\"hidden\" name=\"page\" value=\"\">
                            <input type=\"hidden\" name=\"hidden\" value=\"".$row['id']."\">
                            <input type=\"submit\" name=\"btn\" value=\"Delete Image\">
                            </form>";

                    $figure2 = "</figure>";


                    echo $figure.$caption.$imgage.$form.$comment.$delete.$figure2;
                }
            }
            catch(PDOException $e){
                echo $db_connnect . "<br>" . $e->getMessage();
            }
        ?>
    </div>

 </BODY>
</HTML>

<?php

    require "../footer.php"

?>

