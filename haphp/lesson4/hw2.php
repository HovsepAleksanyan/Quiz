<?php

// Noroyi erac

$array = [2, 5, 3, 4, 8];
for ($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        $firstNumber = $array[$i];
        $firstNumberConst = $firstNumber;
        $secondNumber = $array[$i + 1];
        if ($firstNumber > $secondNumber) {
            $firstNumber = $secondNumber;
            $secondNumber = $firstNumberConst;
        }
        $array[$i] = $secondNumber;
        $array[$i + 1] = $firstNumber;
    }
}
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

// Hosoyi erac

$num1 = 60;
$num2 = 30;

if ($num1 < $num2) {
    $minNum = $num1;
} else {
    $minNum = $num2;
}
for ($i = 2; $i < $minNum; $i++) {
    if ($num1 % $i == 0 & $num2 % $i == 0) {
        echo $i;
        break;
    };
}

echo "<br>";

for ($i = $minNum; $i >= 2; $i--) {
    if ($num1 % $i == 0 & $num2 % $i == 0) {
        echo $i;
        break;
    };
}
