<?php
if ($_GET['id']) {
    $id = $_GET['id'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'funcStore/functions.php';

    //correct
    $name = input_check($_POST['name']);
    $surname = input_check($_POST['surname']);
    $bday = $_POST['bday'];
    $email = input_check($_POST['email']);
    $age = calcAge($bday);
    $username = $_POST['username'];
    $password = $_POST['password'];

    //validate
    if (
        check('name', $name) &&
        check('surname', $surname) &&
        check('bday', $bday) &&
        check('username', $username) &&
        check('password', $password)
    ) {
        require_once '../config/base.php';

        echo "<br> $name";
        echo "<br> $surname";
        echo "<br> $bday";
        echo "<br> $email";
        echo "<br> $age";
        echo "<br> $username";
        echo "<br> $password";
}
}