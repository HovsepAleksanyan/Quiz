<?php
session_start();
require '../lib/file_action.php';
require '../config/base.php';

if (isset($_POST)) {

    $fileName = $_SERVER['DOCUMENT_ROOT'] . '/' . 'homework10' . '/' . 'storage' . '/' . FILE_NAME; //

    $userCollection = getAllUsers($fileName);

    for ($i = 0; $i < count($userCollection) - 1; $i++) {
        if (
            $_POST['username'] == $userCollection[$i]['username'] &&
            $_POST['password'] == $userCollection[$i]['password']
        ) {
            $_SESSION['loginUser']['name'] = $userCollection[$i]['name'];
            $_SESSION['loginUser']['surname'] = $userCollection[$i]['surname'];

            header('location: ../pages/success.php');
            exit();
        } else {
            $_SESSION['errorMessage'] = "Username or password is invalid";
        }
    }
}

$_SESSION['oldData']['username'] = $_POST['username'] ?? '';
header('location:' . $_SERVER['HTTP_REFERER']);
exit();
