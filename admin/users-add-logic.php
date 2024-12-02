<?php
require "config/database.php";



// GET FORM DATA WHEN SUBMIT is CLICKED
if (isset($_POST["submit"])) {
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $username = filter_var($_POST["username"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); 
    $createpassword = filter_var($_POST["createpassword"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $confirmpassword = filter_var($_POST["confirmpassword"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $is_admin = filter_var($_POST["user-role"], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES["avatar"];

    // VALIDATING INPUTS
    if (!$firstname) {
        $_SESSION["add-user"] = "Please enter your first name";
    } elseif (!$lastname) {
        $_SESSION["add-user"] = "Please enter your last name";
    } elseif (!$username) {
        $_SESSION["add-user"] = "Please enter a username";
    } elseif (!$email) {
        $_SESSION["add-user"] = "Please enter a valid email address";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION["add-user"] = "Password should be at least 8 characters long";
    } elseif (!$avatar["name"]) {
        $_SESSION["add-user"] = "Please upload your avatar image";
    } else {

        if ($createpassword !== $confirmpassword) {
            $_SESSION["signup"] = "Password does not match!";
        } else {
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // VALIDATES IF EMAIL/USERNAME ALREADY EXIST
            $user_check = "SELECT * from users WHERE username = '$username' OR email = '$email'";
            $user_check_result = mysqli_query($connection, $user_check);
 
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION["add-user"] = "Username/Email is already taken";
            } else {
                $time = time(); // Will rename avatar based on the time generated which is always unique 
                $avatar_name = $time . $avatar["name"];
                $avatar_tmp_name = $avatar["tmp_name"];
                $avatar_path = "../images/" . $avatar_name;

                // VALIDATES IF IMAGE IS AN ACTUAL IMAGE - does it match the accepted file format
                $allowed_files = ["png", "jpg", "jpeg"];
                $extension = explode(".", $avatar_name);
                $extension = end($extension);

                if (in_array($extension, $allowed_files)) {
                    // VALIDATES IF IMAGE IS NOT TOO LARGE
                    if ($avatar["size"] < 1000000) { // 1mb
                        move_uploaded_file($avatar_tmp_name, $avatar_path);
                    } else {
                        $_SESSION["add-user"] = "File size too big. Upload a file less than 1mb";
                    }
                } else {
                    $_SESSION["add-user"] = "File should be in the following format: .png, .jpg, .jpeg";
                }
            }
        }
    }

        // REDIRECT IF ERROR ENCOUNTERED
        if ($_SESSION["add-user"]) {
            $_SESSION["add-user-data"] = $_POST; //  Retains all the data so no need to retype
            header("Location: " . ROOT_URL . "admin/users-add.php");
            die();
        } else {
            $insert_user = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', '$is_admin')";

            $insert_user_result = mysqli_query($connection, $insert_user);

            if (!mysqli_errno($connection)) {
                $_SESSION["add-user-success"] = "New user $firstname $lastname added!";
                header("Location: " . ROOT_URL . "admin/manage-users.php");
                die();
            }
        }



} else {
    header("Location: " . ROOT_URL . "admin/add-user.php");
    die();
}