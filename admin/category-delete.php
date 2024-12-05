<?php

require "config/database.php";




if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    // FETCH DATA FROM DB

    $update_query = "UPDATE posts SET category_id = 8 WHERE category_id = $id";
    $update_result = mysqli_query($connection, $update_query);

    if (!mysqli_errno($connection)) {
        $query = "DELETE FROM categories WHERE id = $id LIMIT 1";
        $result = mysqli_query($connection, $delete_category_query);
        $_SESSION["delete-category-success"] = "Category Deleted - {$category['title']}";
    } else {
        $_SESSION["delete-category"] = "Unable to delete category {$category['title']}";
    }
}

header("Location: " . ROOT_URL . "admin/manage-category.php");
die();