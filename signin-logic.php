<?php
require "config/database.php";

if (isset($_POST["submit"])) {
    // OBTAINING FORM DATA
    $username_email = filter_var($_POST["username_email"], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);

    // VALIDATING INPUT
    if (!$username_email) {
        $_SESSION["signin"] = "Username/Email required";
    } else if (!$password) {
        $_SESSION["signin"] = "Password required";
    } else {
        $fetch_user = "SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'";

        $fetch_user_result = mysqli_query($connection, $fetch_user);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record["password"];

            // COMPARE FORM PASS vs DB PASS
            if (password_verify($password, $db_password)) {

                // SET SESSION FOR ACCESS CONTROL
                $_SESSION["user-id"] = $user_record["id"];

                // SET SESSION IF USER is ADMIN
                if ($user_record["is_admin"] == 1) {
                    $_SESSION["user_is_admin"] = true;
                }
                // LOG IN if ADMIN
                header("Location: " . ROOT_URL . "admin/");
            } else {
                $_SESSION["signin"] = "Please check inputs";
            }
        } else {
            $_SESSION["signin"] = "Not Found!";
        }
    }
    echo '<pre>' , var_dump($_POST["submit"]) , '</pre>';
    echo '<pre>' , var_dump($_SESSION["signin"]) , '</pre>';

    if (isset($_SESSION["signin"])) {
        $_SESSION["signin-data"] = $_POST;
        header("Location: " . ROOT_URL . "signin.php");
        die();
    }

} else {
    header("Location: " . ROOT_URL . "signin.php");
    die();
}
