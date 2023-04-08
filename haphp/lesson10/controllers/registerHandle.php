<?php
session_start();
require '../configs/base.php';
require '../storage/file.php';
//echo "<pre>";
//print_r($_REQUEST);
//print_r($_POST);
//print_r($_GET);
//print_r($_SERVER);
//echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = [];
    $errors = [];
    foreach ($_POST as $key => $value) {
        $value = trim(strip_tags($value));
        if (!isset($_POST['name']) || strlen($_POST['name']) < 3) {
            $errors['name'] = "Name Field is invalid";
        }
        if (!isset($_POST['username']) || strlen($_POST['username']) < 3) {
            $errors['username'] = "Username Field is invalid";
        }
        if (!isset($_POST['password']) || strlen($_POST['password']) < 3) {
            $errors['password'] = "Password Field is invalid";
        }
        if (!isset($_POST['password']) || !isset($_POST['re_password'])) {
            $errors['re_password'] = "Password And Reply Password not match";
        }
        $user[$key] = $value;
    }
    if (!$errors) {
        if (createUser($user)) {
            header('location:' . HOME_PAGE);
            $_SESSION['auth_user'] = $user;
            exit();
        }
    }
}
header('location:' . $_SERVER['HTTP_REFERER']);
exit();
