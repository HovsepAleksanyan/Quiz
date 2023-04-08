<?php
define('PASSWORD_SALT', "hjnfdklghnfjhgdf;ljfsd454fdg5");
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
if($_POST){
    $name = $_POST['name']?? '';
    $email = $_POST['email']?? '';
    $password = $_POST['password']?? '';  //md5 sha(256)
    $criptPassword = md5($password.PASSWORD_SALT );
}
