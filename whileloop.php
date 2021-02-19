<?php

$numbers = array(10, 20, 30);

echo "<dt>Цикл while: ";
$i = 0;
while ($i < 3)
{
    echo "<dd>Елемент $i = $numbers[$i] ";
    $i++;
}

echo "<dt>Цикл do while: ";
$i = 0;
do
{
    echo "<dd>Елемент $i = $numbers[$i] ";
    $i++;
}
while($i < 3);
