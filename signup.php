<?php

require "config/constant.php";

$firstname = $_SESSION["signup-data"]["firstname"] ?? null;
$lastname = $_SESSION["signup-data"]["lastname"] ?? null;
$username = $_SESSION["signup-data"]["username"] ?? null;
$email = $_SESSION["signup-data"]["email"] ?? null;
$createpassword = $_SESSION["signup-data"]["createpassword"] ?? null;
$confirmpassword = $_SESSION["signup-data"]["confirmpassword"] ?? null;

unset($_SESSION["signup-data"]);
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
                <h2>Sign Up</h2>

                <?php if (isset($_SESSION["signup"])) : ?>

                    <div class="alert__message error">
                        <p>
                            <?= $_SESSION["signup"];
                            unset($_SESSION["signup"]);

                            ?>
                        </p>
                    </div>
                    
                 <?php endif ?>

                <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                    <input type="text" name="firstname" placeholder="First Name" value="<?= $firstname ?>">
                    <input type="text" name="lastname" placeholder="Last Name" value="<?= $lastname ?>">
                    <input type="text" name="username" placeholder="Username" value="<?= $username ?>">
                    <input type="text" name="email" placeholder="Email" value="<?= $email ?>">
                    <input type="password"  name="createpassword" placeholder="Password" value="<?= $createpassword ?>">
                    <input type="password"  name="confirmpassword" placeholder="Confirm Password" value="<?= $confirmpassword ?>">

                    <div class="form__control">
                        <label for="avatar">User avatar</label>
                        <input type="file" name="avatar" id="avatar">
                    </div>
                    <button type="submit" class="button" name="submit">Sign Up</button>
                    <small>
                        Already have an account? <a href="signin.php">Sign In</a>
                    </small>
                </form>
            </div>
        </section>

        <!-- END OF SIGN UP -->




    </main>
</body>
</html>