<?php
function check($field, $value)
{
    if ($field == 'username') {
        if ($value != '') {
            return preg_match('/[a-z]/', $value);
        }
    }
    if ($field == 'password') {
        if ($value != '') {
            return preg_match('/[0-9]/', $value);
        }
    }

    return false;
}