<?php


// require "config/constant.php";
require "constant.php";

// DB CONNECTION
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_errno($connection)) {
    die(mysqli_errno($connection));
}