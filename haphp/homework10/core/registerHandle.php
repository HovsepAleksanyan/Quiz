<?php
session_start();
require '../storage/file.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate/validate.php';

    $user = [];
    $errors = [];

    foreach ($_POST as $key => $value) {
        $value = trim(strip_tags($value));

        if (
            isset($_POST['name']) && check('name', $_POST['name']) &&
            isset($_POST['surname']) && check('surname', $_POST['surname']) &&
            isset($_POST['username']) && check('username', $_POST['username']) &&
            isset($_POST['password']) && check('password', $_POST['password']) &&
            isset($_POST['re_password']) && check('re_password', $_POST['re_password']) &&
            $_POST['password'] == $_POST['re_password']
        ) {
            $user[$key] = $value;
        } else {

            if ($_POST['name'] == '') {
                $errors['name'] = "Fill in 'name' field.";
            } elseif (!check('name', $_POST['name'])) {
                $errors['name'] = "'name' field must be (a-z).";
            }

            if ($_POST['surname'] == '') {
                $errors['surname'] = "Fill in 'surname' field.";
            } elseif (!check('surname', $_POST['surname'])) {
                $errors['surname'] = "'surname' field must be (a-z).";
            }

            if ($_POST['username'] == '') {
                $errors['username'] = "Fill in 'username' field.";
            } elseif (!check('username', $_POST['username'])) {
                $errors['username'] = "'username' field must be (a-z).";
            }

            if ($_POST['password'] == '') {
                $errors['password'] = "Fill in 'password' field.";
            } elseif (!check('password', $_POST['password'])) {
                $errors['password'] = "'password' symbols must be grater than 8.";
            }

            if ($_POST['re_password'] == '') {
                $errors['re_password'] = "Reply the 'password'.";
            } elseif ($_POST['re_password'] != $_POST['password']) {
                $errors['re_password'] = "'password' and 'reply password' aren't match.";
            }

            $_SESSION['regErrors'] = $errors;
        }
    }
    if (!$errors) {
        if (createUser($user)) {
            header('location: ../index.php');
            exit();
        }
    }
}

$_SESSION['oldData']['name'] = $_POST['name'] ?? '';
$_SESSION['oldData']['surname'] = $_POST['surname'] ?? '';
$_SESSION['oldData']['username'] = $_POST['username'] ?? '';

header('location: '. $_SERVER['HTTP_REFERER']); 
exit();
