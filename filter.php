<?php

$hdr = '<h1 style="color: red">PHP для начинающих</h1>';
echo $hdr;

$hdr = filter_var($hdr, FILTER_SANITIZE_STRING);
echo "Отфильтрований заголовок: $hdr";

function validate($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo ("<hr>$email - ДОПУСТИМИЙ адрес електронной почти");
    }
    else
    {
        echo ("<hr>$email - НЕДОПУСТИМИЙ адрес електронной почти");
    }
}

$email = 'mike @example.com';
validate($email);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
validate($email);
