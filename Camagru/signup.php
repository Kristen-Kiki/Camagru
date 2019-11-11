<?php
    require "header.php";
?>

<main>
    <div class="">
        <section class="section-default">
            <h1>New Member?</h1>
            <?php
                if (isset($_GET['error']))
                {
                    if ($_GET['error'] == "emptyfields")
                    {
                        echo '<p class="signuperror"> Complete all fields! </p>';
                    }

                    else if ($_GET['error'] == "invaliduidmail")
                    {
                        echo '<p class="signuperror"> Invalid username and e-mail! </p>';
                    }

                    else if ($_GET['error'] == "invaliduid")
                    {
                        echo '<p class="signuperror"> Invalid username! </p>';
                    }

                    else if ($_GET['error'] == "invalidmail")
                    {
                        echo '<p class="signuperror"> Invalid e-mail! </p>';
                    }

                    else if ($_GET['error'] == "passwordcheck")
                    {
                        echo '<p class="signuperror"> Passwords do not match! </p>';
                    }

                    else if ($_GET['error'] == "useridtaken")
                    {
                        echo '<p class="signuperror"> Username is already in use! </p>';
                    }
                }

                else if ($_GET['signup'] == "success")
                {
                    echo '<p class="signupsuccess"> Welcome to Camagru </p>';
                }
            ?>
                <form action="./includes/inc_signup.php" method="post">
                <?php
                    echo "Signup function called!";
                ?>
                    <input type="text" name="uid" placeholder="Username" required>
                    <input type="email" name="mail" placeholder="E-mail" required> <!-- to allow user to reset password-->
                    <input type="password" name="pwd" placeholder="Password" required>
                    <input type="password" name="pwd_confirm" placeholder="Confirm Password" required>
                    <button type="submit" name="signup_submit"> Signup to Camagru </button>
                </form>
        </section>
    </div>
</main>

<?php
    require "footer.php";
?>