<?php
function write($file_way, $data)
{
    $file = fopen($file_way, 'a');
    $result = fwrite($file, $data);
    fclose($file);

    return $result;
}

function read($file_way)
{
    $f = fopen($file_way, 'r');
    $res = fread($f, filesize($file_way));
    fclose($f);
    return $res;
}

function getAllUsers($file_name) 
{ 
    $file = fopen($file_name, "r+"); 
    $list = [];  
     
    while (!feof($file)) { 
        $line = fgets($file); 
        array_push($list, json_decode($line, true)); 
    } 
 
    fclose($file); 
    return $list; 
}

