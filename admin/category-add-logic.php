<?php
require "config/database.php";

if (isset($_POST["submit"])) {
    $title = filter_var($_POST["title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST["description"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // VALIDATING INPUTS
    if (!$title) {
        $_SESSION["add-category"] = "Enter Category Title";
    } else if (!$description) {
        $_SESSION["add-category"] = "Enter Category Description";
    }

    // REDIRECT if INPUT ISSUE
    if ($_SESSION["add-category"]) {
        $_SESSION["add-category-data"] = $_POST;
        header("Location: " . ROOT_URL . "admin/category-add.php");
        die();
    } else {
        // INSERT CATEGORY TO DB
        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION["add-category"] = "Unable to add Category";
            header("Location: " . ROOT_URL . "admin/category-add.php");
        } else {
            $_SESSION["add-category-success"] = "Category Successfully Added";
            header("Location: " . ROOT_URL . "admin/manage-category.php");
            die();
        }
    }
}

