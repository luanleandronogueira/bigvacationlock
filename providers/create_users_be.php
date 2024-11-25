<?php 
session_start();
include_once 'classes.php';
$User = new User;

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){

        if($_POST['password_user'] === $_POST['user_confirm_password']) {
            $name_user = ucwords(filter_var($_POST['name_user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $nickname_user = ucwords(filter_var($_POST['nickname_user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $email_user = filter_var($_POST['email_user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password_user = filter_var($_POST['password_user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user_confirm_password = filter_var($_POST['user_confirm_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $location_user = filter_var($_POST['location_user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
            $consult_user = $User->consult_user($email_user);
    
            if($consult_user > 0) {
                header("Location: ../create_user.php?status1=user_exists");
    
            } else {
                $password_user = password_hash($password_user, PASSWORD_DEFAULT);
                $User->insert_user($name_user, $nickname_user, $email_user, $password_user, 'A', $location_user);
                header("Location: ../create_user.php?status2=success");
            }
        } else {
            header("Location: ../create_user.php?status=password_not_equal");
        }

    } else {
        header("Location: ../index.php");
        die();

    }

} else {
    header("Location: ../index.php");
    die();

}