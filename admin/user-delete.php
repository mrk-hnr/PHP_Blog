<?php

require "config/database.php";

if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    // FETCH USER FROM DB

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    // PERFORMS CHECK THAT ONLY 1 USER IS RETURNED
    if (mysqli_num_rows($result) == 1) {

        // LOCATES THE IMAGE ASSOCIATED WITH USER
        $avatar_name = $user["avatar"];
        $avatar_path = "../images/users/" . $avatar_name;

        // DELETES IMAGE IF FOUND
        if ($avatar_path) {
            unlink($avatar_path);
        }
    }

    // DELETES ALL POSTS RELATED TO USER WHEN HIS PROFILE IS DELETED

    $thumbnail_query = "SELECT thumbnail FROM posts WHERE author_id = $id";
    $thumbnail_result = mysqli_query($connection, $thumbnail_query);

    if (mysqli_num_rows($thumbnail_result) > 0) {
        while($thumbnail = mysqli_fetch_assoc($thumbnail_result)) {
            $thumbnail_path = "../images/posts_image/" . $thumbnail["thumbnail"];

            // DELETE IMAGE
            if ($thumbnail_path) {
                unlink($thumbnail_path);
            }
        }
    }

    // DELETE USER FROM DB
    $delete_user_query = "DELETE FROM users WHERE id = $id";
    $delete_user_result = mysqli_query($connection, $delete_user_query);

    if (mysqli_errno($connection)) {
        $_SESSION["delete-user"] = "Unable to delete user {$user['firstname']} {$user['lastname']}";
    } else {
        $_SESSION["delete-user-success"] = "{$user['firstname']} {$user['lastname']} has been deleted";
    }

    

    
}

header("Location: " . ROOT_URL . "admin/manage-users.php");
die();