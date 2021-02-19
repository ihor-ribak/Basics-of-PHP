<?php

function drink(string $tmp = 'гарячий', string $flavor = 'чай')
{
    echo "Пийте $tmp $flavor.<br>";
}
drink();
drink('холодний');
drink('охолоджений', 'лимонад');

function add(int ...$numbers)
{
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    echo "<hr>Усього: $total";
}
add(1, 2, 3);