<?php

function greet()
{
    echo "Hello!<br>";
}

greet();

function outer()
{
    function inner()
    {
        echo "Встроєна функція визвана!<br>";
    }
    echo "Встроєна функція створена!<br>";
}

outer();
inner();