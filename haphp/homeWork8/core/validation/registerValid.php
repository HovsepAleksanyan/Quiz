<?php
function checkData($field, $val)
{
    if ($field == 'name') {
        if ($val != '') {
            return preg_match('/[a-z]/', $val);
        }
    }
    if ($field == 'surname') {
        if ($val != '') {
            return preg_match('/[a-z]/', $val);
        }
    }
    if ($field == 'username') {
        if ($val != '') {
            return preg_match('/[a-z]/', $val);
        }
    }
    if ($field == 'password') {
        if ($val != '') {
            return preg_match('/[0-9]/', $val);
        }
    }

    return false;
}
