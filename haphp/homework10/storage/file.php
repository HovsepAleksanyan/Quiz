<?php
require '../lib/file_action.php';
require '../config/base.php';

function createUser(array $data)
{
    if ($data) {
        $jsonData = json_encode($data) . "\r\n";
        $way = $_SERVER['DOCUMENT_ROOT'] . '/' . 'homework10' . '/' . 'storage' . '/' . FILE_NAME; //

        $_SESSION['regUser'] = $data;

        return write($way, $jsonData);
    }

    return false;
}
