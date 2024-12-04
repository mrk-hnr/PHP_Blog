<?php
require "config/database.php";

if (isset($_POST["submit"])) {
    $author_id = $_SESSION["user-id"];
    $title = filter_var($_POST["title"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST["body"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST["category"], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST["is_featured"], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES["thumbnail"];

    // SET FEATURED to 0 VALUE IF NOT SELECTED
    $is_featured = $is_featured == 1 ? : 0;

    // VALIDET FORMS
    if (!$title) {
        $_SESSION["add-post"] = "Enter Title";
    } elseif (!$category_id) {
        $_SESSION["add-post"] = "Select Category";
    } elseif (!$body) {
        $_SESSION["add-post"] = "Enter content on the body";
    } elseif (!$thumbnail["name"]) {
        $_SESSION["add-post"] = "Select thumbnail";
    } else {
        // PROCESSING THUMBNAIL
        // RENAMING IMAGE
        $time = time();
        $thumbnail_name = $time . $thumbnail["name"];
        $thumbnail_tmp_name = $thumbnail["tmp_name"];
        $thumbnail_destination_path = "../images/posts_image/" . $thumbnail_name;

        // PERFORMS CHECK on IMAGE
        $allowed_files = ["png", "jpg", "jpeg"];
        $extension = explode(".", $thumbnail_name);
        $extension = end($extension);

        if (in_array($extension, $allowed_files)) {
            // PERFORM CHECK on IMAGE SIZE
            if ($thumbnail["size"] < 2000000) {
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);


            } else {
                $_SESSION["add-post"] = "Image size should be less than 2MB";
            }
        } else {
            $_SESSION["add-post"] = "Image format should be .png, .jpg, or .jpeg";
        }
    }
    // REDIRECTS to ADD POST PAGE with DATA if hit an error
    if (isset($_SESSION["add-post"])) {
        $_SESSION["add-post-data"] = $_POST;
        header("Location: " . ROOT_URL . "admin/post-add.php");
        die();
    } else {
        // set is_featured to 0 if currently set to 1
        if ($is_featured == 1) {
            $zero_is_featured_query = "UPDATE posts SET is_featured = 0";
            $zero_is_featured_result = mysqli_query($connection, $zero_is_featured_query);
        }

        // INSERT POST to DB
        $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES (
        '$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
        $result = mysqli_query($connection, $query);

        if (!mysqli_errno($connection)) {
            $_SESSION["add-post-success"] = "Content Posted";
            header("Location: " . ROOT_URL . "admin/");
            die();
        } 
        }
    }
    header("Location: " . ROOT_URL . "admin/post-add.php");
    die();