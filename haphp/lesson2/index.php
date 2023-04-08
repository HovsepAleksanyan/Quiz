<?php
$array = array(1, "text", true, 99.2);
$array2 = [1, "text", true, 99.2, false];
echo $array2[1];
echo "<br>";
echo $array2[2];
echo "<br>";
echo "$array2[4]";
echo "<pre>";
print_r($array2);
echo "</pre>";
var_dump($array2);
$array3= [0=>12, 1=>55, 3=>"text"];
echo "<br>";
//echo $xxx;
//echo $array3[2];
$array3= ['name'=>"Hunan", 'age'=>50];
$array = [
    'user'=>[
    'name'=>"Hunan",
    'age'=>20,
    ],
    0=>0,
    ["test"],
    'data'=>[1,2,'string'],
    4=>4,
    'test'=>"asdfsdf",
];
print_r($array);
echo "<br>";
echo $array['user']['name'];echo "<br>";
echo '$array[text]';echo "<br>";
echo "$array[test]";echo "<br>";
echo "array : ".$array['user']['name'];
echo count($array);
echo "<hr>";
print_r(array_keys($array));
echo "<hr>";
print_r(array_values($array));
echo "<br>";
echo array_key_exists('user',$array);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo array_search('asdfsdfddd',$array);


