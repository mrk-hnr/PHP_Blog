<?php
require "config/constant.php";

$username_email = $_SESSION["signin-data"]["username_email"] ?? null;
$password = $_SESSION["signin-data"]["password"] ?? null;

unset($_SESSION["signin-data"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/forms.css">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Blog</title>
</head>

<body>

    <main>

        <!-- START OF SIGN UP -->

        <section class="form__section">
            <div class="container form__section-container">
            <h2>Sign In</h2>
            <!-- <h2>Sign In</h2>
                <div class="alert__message success">
                    <p>Registration Success!</p>
                </div> -->
                <?php if (isset($_SESSION["signup-success"])) : ?>
                    <div class="alert__message success">
                        <p>
                            <?= $_SESSION["signup-success"];
                            unset($_SESSION["signup-success"]); ?>
                        </p>
                    </div>

                <?php elseif(isset($_SESSION["signin"])) : ?>
                    <div class="alert__message error">
                        <p>
                            <?= $_SESSION["signin"];
                            unset($_SESSION["signin"]); ?>
                        </p>
                    </div>

                <?php endif ?>

                <form action=" <?= ROOT_URL ?>signin-logic.php" method="POST">
                    <input type="text" placeholder="Username or Email" name="username_email" value="<?= $username_email ?>">
                    <input type="password" placeholder="Password" name="password" value="<?= $password ?>">


                    <button type="submit" class="button" name="submit">Sign In</button>
                    <small>
                        Don't have an account? <a href="signup.php">Sign Up</a>
                    </small>
                </form>
            </div>
        </section>

        <!-- END OF SIGN UP -->




    </main>
    <!-- START OF FOOTER -->








    <script src="main.js"></script>
</body>

</html>