<?php

function randomNum()
{
    $code = substr(str_shuffle('1234567890'), 4);
    return $code;
}

//The code start with 254 then 5 numbers
function GotvetId()
{
    $code = substr(str_shuffle('1234567890'), 5);
    $start="254";
    $newcode=$start.$code;
   intval($newcode);

    return $newcode;
}

function filecode()
{
    $code = substr(str_shuffle('1234567890'), 5);
    return $code;
}


function randomString()
{
    $code = substr(str_shuffle('abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'), 10, 10);
    return $code;
}

function randomPass()
{
    $code = substr(str_shuffle('abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*();,.<>?/'), 12, 12);
    return $code;
}
