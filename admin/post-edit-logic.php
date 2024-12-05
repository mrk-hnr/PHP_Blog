<?php
require "config/database.php";

// PERFORMS CHECK if SUBMIT WAS CLICKED
if (isset($_POST["submit"])) {
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
    $prev_thumbnail_name = filter_var($_POST["prev_thumbnail"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST["title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST["body"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST["category"], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST["is_featured"], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES["thumbnail"];

    // is_Featured set to 0 if unchecked
    $is_featured = $is_featured == 1 ?: 0;

    // PERFORM CHECK on INPUTS
    if (!$title) {
        $_SESSION["edit-post"] = "ERROR - Missing Title";
    } elseif (!$category_id) {
        $_SESSION["edit-post"] = "ERROR - Post Not Found";
    }  elseif (!$body) {
        $_SESSION["edit-post"] = "ERROR - Missing Body Content";
    } else {
        // DELETE PREV THUMBNAIL IF NEW ONE IS UPLOADED
        if ($thumbnail["name"]) {
            $prev_thumbnail_path = "../images/posts_image/" . $prev_thumbnail_name;
            
            if ($prev_thumbnail_path) {
                unlink($prev_thumbnail_path);
            }

            // PROCESS NEW THUMBNAIL
            $time = time();
            $thumbnail_name = $time . $thumbnail["name"];
            $thumbnail_temp_name = $thumbnail["tmp_name"];
            $thumbnail_destination_path = "../images/posts_image/" . $thumbnail_name;

            // SET IMAGE FORMAT AND SIZE
            $allowed_files = ["png", "jpg", "jpeg"];
            $extension = explode(".", $thumbnail_name);
            $extension = end($extension);

            if (in_array($extension, $allowed_files)) {
                if ($thumbnail["size"] < 2000000) {
                    move_uploaded_file($thumbnail_temp_name, $thumbnail_destination_path);
                } else {
                    $_SESSION["edit-post"] = "ERROR - Maximum 2MB Image Size Hit";
                }

            } else {
                $_SESSION["edit-post"] = "ERROR - Image format should be the ff: .png, .jpg, .jpeg";
            }
        }
    }

    if ($_SESSION["edit-post"]) {
        // REDIRECT TO if EDITS ARE INVALID
        header("Location: " . ROOT_URL . "admin/");
        die();
    } else {
        // ALL OTHER POST is_featured VALUE SET to 0 if CURRENT POST is VALUED AT 1
        if ($is_featured == 1) {
            $zero_feature_other_post = "UPDATE posts SET is_featured = 0";
            $zero_feature_other_post_result = mysqli_query($connection, $zero_feature_other_post);
        }

        // SET THUMBNAIL NAME TO NEW ONE, else KEEP OLD THUMBNAIL NAME
        $thumbnail_insert = $thumbnail_name ?? $prev_thumbnail_name;

        $query = "UPDATE posts SET title = '$title', body = '$body', thumbnail = '$thumbnail_insert', category_id = $category_id, is_featured = $is_featured WHERE id = $id LIMIT 1";
        $result = mysqli_query($connection, $query);
    }

    if (!mysqli_errno($connection)) {
        $_SESSION["edit-post-success"] = "Post Updated";
    }
}
header("Location: " . ROOT_URL . "admin/");
die();
