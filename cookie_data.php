<?php

if (count($_COOKIE) > 0)
{
    echo '<dl> ';
    foreach ($_COOKIE as $key => $value)
    {
        echo "<dt>Ключ: $key";
        echo "<dd>Значення: $value";
    }
    echo '</dl><hr>';
    var_dump($_COOKIE);
}
else
{
    echo 'Будь ласка, <a href="cookie_form.html">авторизуйтесь</a>';
}