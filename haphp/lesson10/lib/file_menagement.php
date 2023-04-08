<?php

function write($file_name, $data)
{
    $f = fopen($file_name, 'a');
    $res = fwrite($f, $data);
    fclose($f);
    return $res;
}
function read($file_name)
{
    $f = fopen($file_name, 'r+');
    $res = fread($f, filesize($file_name));
    fclose($f);
    return $res;
}

//
function getAllUsers($file_name)
{
    $file = fopen($file_name, "r");

    //Output lines until EOF is reached
    while (!feof($file)) {
        $line = fgets($file);
        echo $line . "<br>";
    }

    fclose($file);
}
