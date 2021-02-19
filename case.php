<?php

$str = "C++ Programming is easy steps";
echo "Исходная строка: '$str' <hr>";
$ver = strtolower($str);
echo "Строчние букви: '$ver' <br>";
$ver = strtoupper($str);
echo "Прописні букви: '$ver' <hr>";
$ver = ucfirst($str);
echo "Прописна перша буква першого слова: '$ver' <br>";
echo 'Прописна перша буква кожного слова: '.ucwords($ver);