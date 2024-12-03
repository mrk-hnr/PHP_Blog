<?php 
require "config/database.php";

if (isset($_POST["submit"])) {
    // GET UPDATED FORM DATA
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
    $is_admin = filter_var($_POST["user-role"], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST["firstname"], 
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$firstname || !$lastname) {
        $_SESSION["edit-user"] = "Please fill up all details";
    } else {
        // UPDATE USER
        $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', is_admin = $is_admin WHERE id = $id LIMIT 1";

        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION["edit-user"] = "Failed to update user data";
        } else {
            $_SESSION["edit-user-success"] = "User data successfully updated - $firstname $lastname";
        }
    }
}

header("Location: " . ROOT_URL . "admin/manage-users.php");
die();