<?php
session_start();
session_unset();

require '../globals/globals.php';

if (isset($_POST) && $_POST != []) {
    require 'validation/registerValid.php';

    if (
        isset($_POST['name']) && checkData('name', $_POST['name']) &&
        isset($_POST['username']) && checkData('username', $_POST['surname']) &&
        isset($_POST['username']) && checkData('username', $_POST['username']) &&
        isset($_POST['password']) && checkData('password', $_POST['password'])
    ) {
        $_SESSION = $_POST;
    } else {

        if (isset($_POST['name']) && !checkData('name', $_POST['name'])) {

            if ($_POST['name'] == '') {
                $_SESSION['errors']['name'] = "Fill in Name field";
            } elseif (!checkData('name', $_POST['name'])) {
                $_SESSION['errors']['name'] = "Name must be 'a-z'";
            }
        }

        if (isset($_POST['surname']) && !checkData('surname', $_POST['surname'])) {

            if ($_POST['surname'] == '') {
                $_SESSION['errors']['surname'] = "Fill in Surname field";
            } elseif (!checkData('name', $_POST['surname'])) {
                $_SESSION['errors']['surname'] = "Surname must be 'a-z'";
            }
        }

        if (isset($_POST['username']) && !checkData('name', $_POST['username'])) {

            if ($_POST['username'] == '') {
                $_SESSION['errors']['username'] = "Fill in Username field";
            } elseif (!checkData('name', $_POST['username'])) {
                $_SESSION['errors']['username'] = "Username must be 'a-z'";
            }
        }

        if (!checkData('name', $_POST['email'])) {

            if ($_POST['email'] == '') {
                $_SESSION['errors']['email'] = "Fill in Email field";
            }
        }

        if (!checkData('name', $_POST['password'])) {

            if ($_POST['password'] == '') {
                $_SESSION['errors']['password'] = "Fill in Password field";
            } elseif (checkData('name', $_POST['password'])) {
                $_SESSION['errors']['password'] = "Password must be '0-9'";
            }
        }

        $_SESSION['dataOld']['name'] = $_POST['name'] ?? '';
        $_SESSION['dataOld']['surname'] = $_POST['surname'] ?? '';
        $_SESSION['dataOld']['username'] = $_POST['username'] ?? '';
        $_SESSION['dataOld']['email'] = $_POST['email'] ?? '';
    }
}

header('location: ' . BASE_URL . 'homework8/pages/register.php');
exit();
