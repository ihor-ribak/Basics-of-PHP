<?php

echo '<title>PHP - Простий XML</title><pre>';
$xml = simplexml_load_file('catalog.xml')
    or die('Неможливо загрузити дані!');
var_dump($xml);