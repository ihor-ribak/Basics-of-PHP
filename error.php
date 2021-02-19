<?php

function error_handler($level, $message)
{
    switch ($level)
    {
        case 2: $str = 'Внимание!';
        break;
        case 8: $str = 'Предуприждение!';
        break;
        default: $str = 'Ошибка';
    }
    echo "<b>$str</b><br>$message<hr>";
}
set_error_handler('error_handler');
echo ($var);
$file = fopen('nonsuch.txt', 'r');
$number = 2;
if ($number >= 1)
{
    trigger_error('Числове значення должно бить 1 или менше');
}
