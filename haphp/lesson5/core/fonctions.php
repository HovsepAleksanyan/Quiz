<?php
function getAllNames(array $users){
    $names = [];
    foreach ($users as $k =>$v){
        $names[] = $v['name'];
    }
    return $names;
}

function getAllUsersByActivity(array $users, $type = false){
    $array = [];
    foreach ($users as $k =>$v){
        $status = 0;
        if($type)
            $status = 1;

        if($v['status'] == $status){
            $array[] = $v;
        }
    }
    return $array;
}
