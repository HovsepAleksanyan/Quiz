<?php
function s($text = ''){
    echo "<hr>";
    echo ($text != '')?$text:"";
    echo "<hr>";
}

$x = 10;
if(true){
    $y = 100;
    echo $x;
    s();
}
echo $y;
for ($i = 0; $i < 9; $i++){
    s($i . " Hello!");
};

s($i);

foreach (["HTML", "CSS", "PHP"] as $key => $value){

}
s("Index : " . $key);
s("Value : " . $value);
$z = 300;
function sub($g){
//    return $z;
//    global $z ;
    s($GLOBALS['z'] + $g);
//    s();
}
//echo $z;
//$arr = ['name'=>"Hunan", "age"=>20] ;
//foreach ($GLOBALS as $k => $v){
//    s($k); // ." : " . $v;
//}
sub($x);

function test(){
    static $x = 0;
    $x++;
    s($x);
//    return $x;
}
test();
test();
test();
test();
test();
