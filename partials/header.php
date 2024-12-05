<?php
require "config/database.php";

// FETCHES CURRENT USER DATA
if (isset($_SESSION["user-id"])) {
    $id = filter_var($_SESSION["user-id"], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/blog.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/category-post.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/forms.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/signups.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/styles/single-post.css?v=<?php echo time(); ?>">


    
    
    

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
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">MH</a>

            <ul class="nav__items">

                <li><a href="<?= ROOT_URL ?>">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <?php if (isset($_SESSION["user-id"])) : ?>
                    <li class="nav__profile">
                        <div class="avatar">
                        <img src="<?= ROOT_URL . 'images/users/' . $avatar["avatar"] ?>" alt="">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Log Out</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?= ROOT_URL ?>signin.php">Sign_In</a></li>
                <?php endif ?>

            </ul>

            <button id="open__nav-button">
                <i class="uil uil-bars"></i>
            </button>
            <button id="close__nav-button">
                <i class="uil uil-multiply"></i>
            </button>

        </div>
    </nav>