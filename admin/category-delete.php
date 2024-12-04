<?php

require "config/database.php";




if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    // FETCH DATA FROM DB

    $query = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $category = mysqli_fetch_assoc($result);



    // DELETE USER FROM DB
    $delete_category_query = "DELETE FROM categories WHERE id = $id";
    $delete_category_result = mysqli_query($connection, $delete_category_query);

    if (mysqli_errno($connection)) {
        $_SESSION["delete-category"] = "Unable to delete category {$category['title']}";
    } else {
        $_SESSION["delete-category-success"] = "Category Deleted - {$category['title']}";
    }

}

header("Location: " . ROOT_URL . "admin/manage-category.php");
die();