<?php

$city = 'Chernivtsi';
$units = 'metric';
$mode = 'xml';
$id = '3084c69d6e7d7ad273ef019bfbd75fa2';

$request = 'http://api.openweathermap.org/data/2.5/weather?'.
'q='.$city.'&units='.$units.'&mode='.$mode.'&APPID='.$id;

$xml = simplexml_load_file($request) or die('Неможливо загрузити дані!');

try {
    $xml->asXML('params.xml');
    header('Location: params.xml');
}
catch (Exception $e)
{
    echo 'Помилка: '.$e->getMessage();
}