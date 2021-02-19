<?php

$str1 = 'PHP для начинащих';
$str2 = 'PHP для начинащих';
$str3 = 'PHP Для Начинащих';
$str4 = 'php для начинащих';

echo "'$str1' в порівнянні з '$str2': ".strcmp($str1, $str2).'<br>';
echo "'$str1' в порівнянні з '$str3': ".strcmp($str1, $str3).'<br>';
echo "'$str1' в порівнянні з '$str4': ".strcmp($str1, $str4).'<hr>';

echo 'Порівняння без врахування регістру:<br>';
echo "'$str1' в порівнянні з '$str4': ".strcasecmp($str1, $str4).'<hr>';

$total = 0;
for ($i = 0; $i < strlen($str1); $i++)
{
    $total += ord($str1[$i]);
}
echo "<hr>Об'єм ASCII коду $str1: $total";