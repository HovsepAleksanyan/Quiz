<?php
require '../lib/file_menagement.php';

function createUser(array $data)
{
    if ($data) {
        $jsonData = "\r\n" . json_encode($data);
        $path = $_SERVER['DOCUMENT_ROOT']
            . '/'
            . 'Lesson10'
            . '/'
            . 'storage'
            . '/'
            . 'users'
            . '/'
            . SAVE_FILE_NAME;
        return write($path, $jsonData);
    }
    return false;
}
function getUser($data)
{
    $path = $_SERVER['DOCUMENT_ROOT']
        . '/'
        . 'Lesson10'
        . '/'
        . 'storage'
        . '/'
        . 'users'
        . '/'
        . SAVE_FILE_NAME;
    return read($path);
}
