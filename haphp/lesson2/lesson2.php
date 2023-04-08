<?php
$str = "test";
$arr = [];
echo gettype($arr);
echo "<br>";
echo is_array($arr);
echo is_string($str);
echo is_integer($arr);
echo is_float($arr);
echo is_double($arr);
echo is_object($arr);
echo is_null($arr);
echo is_bool($arr);
echo is_resource($arr);
echo "<br>";
echo is_array([1, 2]);
$bool = true;
echo "<hr>";

if(is_bool($arr)){
 echo "ayo boolian e.";
}
echo "<hr>";
if(10 < 100){
    echo "chisht e";
}
echo "<hr>";
if(10 > 100){
    echo "chisht e";
}
echo "<hr>";
if(100 == 100){
    echo "chisht e";
}
echo "<hr>";
if("100" == 100){
    echo "100 = 100 : chisht e";
}
echo "<hr>";
if(is_string("100")){
    echo "String e";
}
echo "<hr>";
if("100" === 100){
    echo "String e";
}
if(false == 0 ){
    echo "false = 0 e";
}
echo "<hr>";
if(false == [1.2] ){
    echo "false = array e";
}
echo "<hr>";
if([]){
    echo "[]array e";
}
$str = '';
if($str){
    echo "string e";
}
if(true)
    echo "true";
echo "test 2";
echo "<hr>";
if($str == 0){
    echo "if chisht e";
}
else{
    echo "else";
}
echo "<hr>";
if($str == 0) echo "if chisht e";
else echo "else";
echo "<hr>";
$x = 1;
if($x > 10){
    echo "mec e";
}
elseif ($x < 10){
    echo "poqr e";
}
elseif ($x == 10){
    echo "poqr e";
}
elseif ($x <= 10){
    echo "poqr e";
}
elseif ($x >= 10) {
    echo "poqr e";
}
else{
    echo "havasar en";
}
$x = 10;
$y = 15;
$z = 55;
if($x < $y || $x < 100){}
if(100 < $x & $x < $y){}
if(100 < $x & $x < $y || $x == $y){}
if(100 < $x and $x < $y or $x == $y){}
if(100 < $x xor $x < $y){}
if(100 < $x <> $x < $y){}
if((100 < $x & $x < $y) || $z > $x + $y){}
echo ($x + $y) * $z;

if($x != $y){

}
if(!($x == $y)){

}
if($x !== $y){

}

//for($i = 100; $i>=0; $i -=3 ){
//    echo "<br>";
//    echo $i;
//}

$arr = [
    ['name'=>"Poxos", "last_name"=>"Poxosyan"],
    ['name'=>"Karen", "last_name"=>"karapetyan", 'gender'=>'male'],
    ['name'=>"mikael", 'age'=>20]
];
//foreach ($arr as $value){
//    echo "<br>";
//    echo $value['name'];
//}
echo "<hr>";
for($i = 0; $i < count($arr); $i++ ){
    for($j = 0; $j<$i; $j++){
        echo $j ."- j";
    }
    echo "<br>";
//    echo $i . " - " . $arr[$i]['name'];
}
echo "<hr>";
foreach ($arr as $k => $item){
    echo "<hr><h1>$k</h1>";
    foreach ($item as $key =>$value)
    echo $key . " - " . $value . "<br>";
}

