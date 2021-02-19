<?php

$number = 2;
$letter = 'Б';

switch ($number)
{
    case 1: echo "Одиничка<br>";
    break;
    case 2: echo "Двойка<br>";
    break;
    case 3: echo "Тройка<br>";
    break;
    default: echo "Невідоме число<br>";
}

switch ($letter)
{
    case 'А': echo 'Буква "А"<br>';
        break;
    case 'Б': echo 'Буква "Б"<br>';
        break;
    case 'В': echo 'Буква "В"<br>';
        break;
    default: echo "Невідома буква<br>";
}
switch ($number)
{
    case 0:
    case 1:
    case 2: echo "Менше чим 3<br>";
    break;
    default: echo "3 або більше, або менше 0";
}
