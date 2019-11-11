<?php
    require "header.php";
?>

<main>
    <div class="">
        <section class="section-default">
            <?php
            if (isset($_SESION['User_ID']))
            {
                echo '<p class="login-status"> You are now Logged out! </p>';
        
            }

            else
            {
                echo '<p class="login-status"> You are now Logged in! </p>';
            }
            ?> 
        </section>  
    </div>
</main>

<?php
    require "f1ooter.php";
?>