<?php
require "../partials/header.php";

// FETCHES CURRENT USER DATA
if (isset($_SESSION["user-id"])) {
    $id = filter_var($_SESSION["user-id"], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}

// CHECK IF LOGGED IN
if (!isset($_SESSION["user-id"])) {
    header("Location:" . ROOT_URL);
    die();
}
