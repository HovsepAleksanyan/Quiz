<?php
session_start();
session_unset();
require '../config/base.php';
if(isset($_POST) && $_POST != []){
    require 'validate/validate.php';
    if(isset($_POST['username'])
        && check('username',
            $_POST['username'],
        ) && isset($_POST['password'])
        && check('password',
            $_POST['password'],
        )){
        $users = require '../storage/users.php';
        foreach ($users as $user){
            if($user['username'] == $_POST['username']
                && $user['password'] == $_POST['password']){
                header('location:'.BASE_URL.'/lesson8/pages/login_success.php');
                exit();
            }
        }
    }

}
$_SESSION['hin_tvyalner']['username'] = $_POST['username']??'';
$_SESSION['errors']['message'] = "Username or Password is incorrect";
header('location:'.BASE_URL.'/lesson8/pages/login.php');
exit();


