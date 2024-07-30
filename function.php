<?php
function check_mobile($mobile){

    $count = str_split($mobile);

    if (count($count) == 11) {
        if ($count[0] == '0' && $count[1] == '9') {
            return true;
        } else
            return false;
    } else
        return false;
}

$phone = "09033149956";

if(!check_mobile($phone)){
    die('شماره درست را وارد کنید');
}else{
    die('شماره درست است');
}