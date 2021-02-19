<?php

$a = $b = 5;

function modify(int $val, int &$ref)
{
    echo "Передані значення: $val, $ref<hr>";
    $val++;
    $ref++;
    echo "Інкрементировані значення: $val, $ref<hr>";
}
modify($a, $b);
echo "Збережені значення: $a, $b";