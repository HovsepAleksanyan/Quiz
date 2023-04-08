<?php
session_start();
//session_unset();
$errors = [];
if($_POST){
    $name  = $_POST['name']?? '';
    $email  = $_POST['email']?? '';
    $password  = $_POST['password']?? '';
    $re_password  = $_POST['re_password']?? '';
    if(!$name){
        $errors['name'] = "Name field is required";
    }
    if(!$email){
        $errors['email'] = "Email field is required";
    }
    if(!$password){
        $errors['password'] = "Password field is required";
    }
    if($password != $re_password){
        $errors['re_password'] = "Password field is not match Reply password!";
    }

    if($errors){
//        print_r($errors);
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;

//        print_r($_SESSION['errors']);
    }
    $_SESSION['redirected'] = true;
    header('location: index.php');
    exit();

//    print_r($_SESSION);
}
