<?php

$hello = function ($user)
{
    echo "Привет, $user!<br>";
};

$hello('Ігор');

function greet(callable $anon)
{
    $anon('Анька');
}

greet($hello);

function meet(): callable
{
    $time = 'ранок';
    return function ($name) use(&$time)
    {return "Добрий $time, $name!";};
}

$meeting = meet();
echo $meeting('Анька');