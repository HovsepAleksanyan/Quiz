<?php

$array = [
    ['name'=>"Petros"],
    ['name'=>"Poxos", 'last_name'=>"Poxosyan"],
    ['name'=>"Karen"],
    ['name'=>"Karen2"]
];

$arr = [1,2, 5, "tet"];
$i = 0;
while ($i < 5){
    echo $i ."<br>" ;
    $i++;
}
//do{
//  echo "not found";
//  $i+=3;
//  $i++;
//  ++$i;
//  $i--;
//  --$i;
//  $i = $i + 2;
//  $i+=3;
//  $i-=3;
//  $i*=2;
//  $i/=5;
//}while($i<10);
echo "<hr>";
$bool = true;
$x = 0.1;
switch (gettype($x)){
    case "array":
        echo "array";
        break;
    case "string":
        echo "string";
        break;
    case "boolean":
        echo "boolean";
        break;
    default :
         echo "not found";
}
echo "<br>" ;
for($i=0; $i< 4; $i++){
    if($i % 2 != 0 ){
//    break;
        continue;
    }
    echo $i ."<br>" ;
    $array[$i]['name'];

}
switch (gettype($x)){
    case "array":
        echo "array";
        break;
    case "string":
        echo "string";
        break;
    case "boolean":
        echo "boolean";
        break;
    default :
        echo "not found";
}
echo "<hr>";
$var = match(gettype($x)){
    "array"=>"---array---",
    "string"=>"---string---",
    "integer"=>"---integer---",
    default=>"undefined"
};
echo "$var <br>";
$z = "1";
switch ($z){
    case 1:
        echo gettype($z).'int';
        break;
    case "1":
        echo gettype($z)." str";
        break;
    default :
        echo "not found";
}
echo "<hr>";
$var = match($z){
    1=>"---integer---",
    "1"=>"---string---",
    default=>"undefined"
};
echo $var;
if(isset($array[5])){
    echo "ka";
}else
echo "chka";
echo "<hr>";
echo $array[2]['name'];
echo "<hr>";
echo (isset($z))? "chisht" : "sxal e";
echo "<hr>";
$z = "chisht e ka";
echo $y?? "sxal";
$spatial = [];
foreach ($array as $arr){

}



