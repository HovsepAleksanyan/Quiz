<?php
$a = 50;
$b =& $a;
$a = 100;
echo "A : " .$a;
unset($a);
echo "<br>";
echo "B : " .$b;
$z = 999;


$a = 'z';
$y = $$a;
echo "<br>";
echo "X : " .$a;
unset($a);
echo "<br>";
echo "Y : " .$y;


