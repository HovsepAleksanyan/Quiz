<?php

function getInfo($num1, $num2, $toDo)
{
    if ($toDo == "sum") {
        return  sumNumber($num1, $num2);
    } elseif ($toDo == "dif") {
        return difNumber($num1, $num2);
    } elseif ($toDo == "sep") {
        return sepNumber($num1, $num2);
    } elseif ($toDo == "mult") {
        return multNumber($num1, $num2);
    }
}

function sumNumber($num1, $num2)
{
    return $num1 + $num2;
}

function difNumber($num1, $num2)
{
    return $num1 - $num2;
}

function sepNumber($num1, $num2)
{
    return $num1 / $num2;
}

function multNumber($num1, $num2)
{
    return $num1 * $num2;
}

$calc = getInfo(100, 5, "dif");

echo $calc;