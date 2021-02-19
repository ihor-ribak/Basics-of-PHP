<?php

$cars = array('УАЗ' => 'Патриот', 'ГАЗ' => 'Сайбер', 'ВАЗ' => 'Нива');
echo '<dl><dt>Початковий порядок елементів:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '.$value;
}

asort($cars);
echo '<dl><dt>Сортіровка по значенню:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '.$value;
}

ksort($cars);
echo '<dl><dt>Сортіровка по ключу:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '.$value;
}
echo '</dl>';
