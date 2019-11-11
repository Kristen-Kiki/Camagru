<?php
session_start();
?>

<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Camagru</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Camagru allows you to take and edit images with a selection of pre-designed images and add-ons" />
        <meta name="keywords" content="Camagru camera editor" />
    </HEAD>
    <BODY>
        
    
    <HEADER>
        <div id="fh5co-offcanvass">
            <nav>
                <a href="#">
                    <img src="" alt="">  
                </a>
                <ul>
                    <li class="active"> <a href="index.php"> Home</a></li>
                    <li> <a href="#"> Gallery</a>  </li>
                    <li> <a href="#"> Profile</a>  </li>
                    <li> <a href="#"> Account</a>  </li>
                </ul>
                </div>
                <div>  
                    <?php
                      if (isset($_SESSION['User_ID']))
                      {
                          echo '<form action="includes/logout.php" method="post"> <!-- post method allows you not to see everything-->
                                <button type="submit" name="Logout-Submit"> Logout </button>
                            `   </form>';
                      }
          
                      else
                      {
                          echo '<form action="includes/inc_login.php" method="post"> <!-- post method allows you not to see everything-->
                                <input type="text" name="mailuid" placeholder="Username/E-mail">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="Login-Submit"> Login </button>
                                </form>
                                <a href="signup.php"> Signup </a>';
                      }
                    ?>
                    
                    
                </div>
            </nav>
        </HEADER>

