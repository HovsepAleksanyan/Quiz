<?php
$hello = function ($a){
    echo $a;
};
$hello(100);

$a = 100;
$b = 9;
$sum = function ($c) use($a, $b){
  $a + $b;
};
fn()=>10 < 100;


// 5!
$factory = 5;
$fact = 1;
for($i = 1; $i <= $factory; $i++) $fact *= $i;
echo "<br> $factory ! = ";
echo $fact;


function factorial($n){
if($n <= 1) return 1;
return $n * factorial($n - 1);
}
echo "<br> 3 ! = ";
echo factorial(3);

//fibonachi  0, 1, 1, 2, 3, 5, 8
// [0, 1]
function fibonaci($arr, $count){
    if(count($arr) < 2 || count($arr) == $count) return $arr;
    $n1 = $arr[count($arr) - 2];
    $n2 = $arr[count($arr) - 1];
    $arr[] = $n1 + $n2;
    if(count($arr) == $count) return $arr;
    return fibonaci($arr, $count);
}
$result  = fibonaci([0, 1], 8);
foreach ($result as $item) echo "<br> $item";

