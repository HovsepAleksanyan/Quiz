<?php
//$_POST
//$_GET
//$_FILES
//$_REQUEST
//$_SERVER
//$_SESSION
//$_COOKIE
session_start();
$_SESSION['name'] = "Hunan";

echo $_SESSION['name'];
$_SESSION['user'] = [
    'name'=>"Hunan",
    'age'=>20,
    'email'=>'hunanyan@gmail.com'
    ];
unset($_SESSION['user']);
session_unset();
session_destroy();
//$json = json_encode($_SESSION['user']);
//$decodeJson = json_decode($json, true);
//print_r($decodeJson);
////echo $json;
//
//echo $decodeJson->name;
echo "<hr>";
print_r($_SESSION);


