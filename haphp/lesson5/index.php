<?php
//myFunction();
function myFunction(){
    echo "hello";
}
myFunction();

function test(){
//    return "Test12345";
    return ;
}
$t = test();
echo "<hr>";
echo $t;
function s($text = ''){
    echo "<hr>";

    echo ($text != '')?$text:"Argument not found!";
    echo "<hr>";
}
$x = 100;
s("test function!");
s($x);
s();
s(true);

function summa($a, $b, $return = false){
   if($return){
       return $a + $b;
   }
    echo $a + $b;
}
summa(10, 19);
$result = summa(88, 19, true);
s($result);
s();
summa(88, 19, true);
function summa2($a = 1, $b = 50, $return = false){
    if($return){
        return $a + $b;
    }
    echo $a + $b;
}
summa2(return:true);
function summa3(int $a = 1, float $b = 50, bool $return = false)
{

    s($a + $b);
    return $a + $b;
}
summa3(true, "100");
s();
summa3(50, 30);
summa3(0.22, 10);
summa3(0.22, "100");
$arr = ["a"=>"25", "b"=>20];
function summa4(array $arr){
    echo $arr['a'] + $arr['b'];
    return $arr;
}
summa4($arr);
function summa5(...$data){
    s();
    echo gettype($data);
    print_r($data[0]);
}
$x = 10;
$y = 22;
$array = [$x, $y];

summa5();
summa5($array);
summa5($x, $y);


