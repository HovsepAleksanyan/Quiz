<?php
$num1 = 150;
$num2 = 50;

if ($num1 < $num2) {
    $minNum = $num1;
} elseif ($num2 < $num1) {
    $minNum = $num2;
}

for ($i = $minNum; $i > 0; $i--) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        echo $i;
        break;
    }
}
