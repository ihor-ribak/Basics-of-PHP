<?php

for ($i = 1; $i < 4; $i++)
{
    for($j = 1; $j < 4; $j++)
    {
        if ($i == 1 && $j == 1)
        {
            echo "Продовжувати внутрішній цикл, якщо i = $i та j = $j <br>";
            continue;
        }
        if ($i == 2 && $j == 1)
        {
            echo "Прирвати внутрішній цикл, якщо i = $i та j = $j <br>";
            break;
        }
        echo "Виконано i = $i та j = $j <br>";
    }
}