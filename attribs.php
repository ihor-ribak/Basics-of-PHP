<?php

echo '<title>PHP - Простий XML</title>';
$xml = simplexml_load_file('catalog.xml')
or die('Неможливо загрузити дані!');
echo 'Перша книжка: '.$xml->book[0]->title.' для початківців<br>';
echo 'Обложка: '.$xml->book[0]->title['cover'].'<br>';
echo '<img src="'.$xml->book[0]->title['cover'].'">';