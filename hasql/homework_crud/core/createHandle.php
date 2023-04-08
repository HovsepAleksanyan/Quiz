<?php
session_start();
session_unset();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'funcStore/functions.php';

    //correct
    $name = input_check($_POST['name']);
    $surname = input_check($_POST['surname']);
    $bday = $_POST['bday'];
    $age = calcAge($bday);
    $status = checkStatus($age);
    $email = input_check($_POST['email']);
    $username = input_check($_POST['username']);
    $password = input_check($_POST['password']);

    if (
        //validate
        check('name', $name) &&
        check('surname', $surname) &&
        check('bday', $bday) &&
        check('username', $username) &&
        check('password', $password)
    ) {
        //check is there same user
        require_once '../config/base.php';
        $dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
        checkDbUsers($dataBase, $username);

        $sqlReq = "INSERT INTO `my_db`.`users` (`id`,`name`, `surname`, `bday`, `age`, `status`, `email`, `username`, `password`) 
                   VALUES (NULL, '$name', '$surname', '$bday', '$age', '$status', '$email', '$username', '$password')";

        mysqli_query($dataBase, $sqlReq);
        mysqli_close($dataBase);

        header('location: ../');
        exit();
    } else {

        if ($name == '') {
            $_SESSION['errors']['name'] = "Fill in 'name' field.";
        } elseif (!check('name', $name)) {
            if (strlen($name) > 20) {
                $_SESSION['errors']['name'] = "Characters of 'name' must be less than 20.";
            } else {
                $_SESSION['errors']['name'] = "'name' field must be [A-Z, a-z].";
            }
        }

        if ($surname == '') {
            $_SESSION['errors']['surname'] = "Fill in 'surname' field.";
        } elseif (!check('surname', $surname)) {
            if (strlen($surname) > 25) {
                $_SESSION['errors']['surname'] = "Characters of 'surname' must be less than 25.";
            } else {
                $_SESSION['errors']['surname'] = "'surname' field must be [A-Z, a-z].";
            }
        }

        if ($bday == '') {
            $_SESSION['errors']['bday'] = "Fill in 'birthday' field.";
        }

        if ($email == '') {
            $_SESSION['errors']['email'] = "Fill in 'email' field.";
        }

        if ($username == '') {
            $_SESSION['errors']['username'] = "Fill in 'username' field.";
        } elseif (!check('username', $username)) {
            if (strlen($username) > 15) {
                $_SESSION['errors']['username'] = "Characters of 'username' must be less than 15.";
            } else {
                $_SESSION['errors']['username'] = "'username' field must be [A-Z, a-z].";
            }
        }

        if ($password == '') {
            $_SESSION['errors']['password'] = "Fill in 'password' field.";
        } elseif (strlen($password) > 20) {
            $_SESSION['errors']['password'] = "Characters of 'password' must be less than 20.";
        } elseif (strlen($password) < 6) {
            $_SESSION['errors']['password'] = "Characters of 'password' must min 6.";
        }
    }
}

$_SESSION['oldData']['name'] = $name;
$_SESSION['oldData']['surname'] = $surname;
$_SESSION['oldData']['bday'] = $bday;
$_SESSION['oldData']['email'] = $email;
$_SESSION['oldData']['username'] = $username;

header('location: ' . $_SERVER['HTTP_REFERER']);
