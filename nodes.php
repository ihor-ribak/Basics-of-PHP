<?php

echo '<title>PHP - Простий XML</title>';
$xml = simplexml_load_file('catalog.xml')
or die('Неможливо загрузити дані!');
echo 'Перша книжка: '.$xml->book[0]->title.' для початківців<br>';
echo 'Категорія: '.$xml->book[0]->category;