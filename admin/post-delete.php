<?php
require "config/database.php";

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    // FETCH USER FROM DB

    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $query);
    

    // PERFORMS CHECK THAT ONLY 1 USER IS RETURNED
    if (mysqli_num_rows($result) == 1) {
        $post = mysqli_fetch_assoc($result);
        $thumbnail_name = $post["thumbnail"];
        $thumbnail_path = "../images/posts_image/" . $thumbnail_name;

        // DELETES IMAGE IF FOUND
        if ($thumbnail_path) {
            unlink($thumbnail_path);
        }
    }

    // DELETE USER FROM DB
    $delete_post_query = "DELETE FROM posts WHERE id = $id";
    $delete_post_result = mysqli_query($connection, $delete_post_query);

    if (mysqli_errno($connection)) {
        $_SESSION["delete-post"] = "ERROR - Unable to delete post : {$post['title']}";
    } else {
        $_SESSION["delete-post-success"] = "{$post['title']} Deleted";
    }

    

    
}

header("Location: " . ROOT_URL . "admin/");
die();