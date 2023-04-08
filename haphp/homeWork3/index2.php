<?php
$arr = ["someText", 17, "text", false, 18.5];
$myArr = [];

$index = count($arr) - 1;
for ($i = 0; $i < count($arr); $i++) {
    $myArr[$i] = $arr[$index];
    $index--;
};

print_r($myArr);