<?php
//setcookie('first', 'my first cookie', time() + 2);
//if(isset($_COOKIE['first'])){
//    echo $_COOKIE['first'];
//}else{
//
//}
//setcookie('name', 'Hunan');
//
//echo $_COOKIE['name'];
//unset($_COOKIE['first']);
//unset($_COOKIE['test']);
//echo "<hr>";
//print_r($_COOKIE);
$num = 1;
//setcookie('num', $num, time() -1);
if($_COOKIE){

(isset($_COOKIE['num']))?
    setcookie('num', $num++, time() + 5) : setcookie('num', $num, time() + 5);
//    $_COOKIE['num']++ ;

//echo $_COOKIE['num'];
}else {
    setcookie('num', $num, time() + 5);

}
//$num ++;
?>