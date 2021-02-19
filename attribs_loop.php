<?php

echo '<title>PHP - Простий XML</title>';
$xml = simplexml_load_file('catalog.xml')
or die('Неможливо загрузити дані!');

$counter = 0;
foreach ($xml->children() as $book)
{
    $counter++;
    echo ' '.$counter.': ';
    echo '<img src="'.$book->title['cover'].'">';
}