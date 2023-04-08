<?php
session_start();

require '../globals/globals.php';

if (isset($_POST) && $_POST != []) {
    require 'validation/loginValid.php';

    if (
        isset($_POST['username']) && check('username', $_POST['username']) &&
        isset($_POST['password']) && check('password', $_POST['password'])
    ) {

        if (
            $_POST['username'] == $_SESSION['userData']['username'] &&
            $_POST['password'] == $_SESSION['userData']['password']
        ) {
            $_SESSION['userLoginData'] = $_POST;
            header('location:' . BASE_URL . 'homework8/pages/success.php');
            exit();
        } else {
            if ($_POST['username'] != $_SESSION['userData']['username']) {
                $_SESSION['loginMessage']['username'] = "Username is incorrect";
            }
            if ($_POST['password'] != $_SESSION['userData']['password']) {
                $_SESSION['loginMessage']['password'] = "Password is incorrect";
            }
        }
    } else {

        if (isset($_POST['username'])) {
            $_SESSION['loginErrors']['username'] = "Fill in Name field";
        } else {
            $_SESSION['loginErrors']['username'] = "Name must be 'a-z'";
        }

        if (isset($_POST['password'])) {
            $_SESSION['loginErrors']['password'] = "Fill in Password field";
        } else {
            $_SESSION['loginErrors']['password'] = "Password must be '0-9'";
        }
    }
}

header('location: ' . BASE_URL . 'homework8/pages/logIn.php');
exit();
