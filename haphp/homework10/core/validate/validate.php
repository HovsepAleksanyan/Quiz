<?php
function check($field, $value)
{
    if ($field == 'name') {
        if ($value != '') {
            if (preg_match('/[0-9]/', $value)) {
                return false;
            } else {
                return true;
            }
        }
    }

    if ($field == 'surname') {
        if ($value != '') {
            if (preg_match('/[0-9]/', $value)) {
                return false;
            } else {
                return true;
            }
        }
    }

    if ($field == 'username') {
        if ($value != '') {
            if (preg_match('/[0-9]/', $value)) {
                return false;
            } else {
                return true;
            }
        }
    }

    if ($field == 'password') {
        if ($value != '') {
            if (strlen($value) < 6) {
                return false;
            } else {
                return true;
            }
        }
    }

    if ($field == 're_password') {
        if ($value != '') {
            if (strlen($value) < 6) {
                return false;
            } else {
                return true;
            }
        }
    }
}
