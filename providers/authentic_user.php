<?php
session_start();
include_once 'classes.php';
$User = new User;

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST)) {
        $email_user = filter_var($_POST['email_user'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password_user = filter_var($_POST['password_user'], FILTER_SANITIZE_SPECIAL_CHARS);

        // call user from db
        $user_result = $User->authentic_user($email_user);

        if ($user_result['status_user'] === 'A') {
            if (password_verify($password_user, $user_result['password_user'])) {
                // redirect to dashboard if all is well
                $_SESSION = $user_result;
                header("Location: ../dashboard.php");

            } else {
                // user invalid
                header("Location: ../login.php?status=password_invalid");
                die();
            }

        } else {
            header("Location: ../login.php?status1=blocked");
            die();
        }
    } else {

        header("Location: ../login.php?status=empty_post");
        die();
    }
} else {
    header("Location: ../login.php?status=empty_post1");
    die();

}
