<?php
require "config/database.php";

if (isset($_POST["submit"])) {
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST["title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST["description"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // VALIDATE INPUT

    if (!$title || !$description) {
        $_SESSION["edit-category"] = "Please fill up the details";
    } else {
        $query = "UPDATE categories SET title = '$title', description = '$description' WHERE id = $id";
        $result= mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION["edit-category"] = "Unable to update Category";
        } else {
            $_SESSION["edit-category-success"] = "$title Category Successfully Updated";
        }
    }

}

header("Location: " . ROOT_URL . "admin/manage-category.php");
die();