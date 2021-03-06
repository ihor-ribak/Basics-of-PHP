<?php

include ('includes/weather-header.html');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $city = (empty($_POST['city']))? "Moscow" : $_POST['city'];
    $units = 'metric';
    $mode ='xml';
    $id = '3084c69d6e7d7ad273ef019bfbd75fa2';
    $request = 'http://api.openweathermap.org/data/2.5/weather?'.
        'q='.$city.'&units='.$units.'&mode='.$mode.'&APPID='.$id;
    $xml = simplexml_load_file($request) or die('Неможливо загрузити дані!');
    $icon = 'http://openweathermap.org/img/w/'.$xml->weather['icon'].'.png';
    echo '<h1>Сьогодні в місті '.$xml->city['name'];
    echo ': '.$xml->weather[''].'<img src='.$icon.'></h1>';
    echo '<ul><li>Температура: '.$xml->temperature['value'];
    echo '&deg; '.$xml->temperature[''].' C';
    echo '<li>Вітер: '.$xml->wind->speed['value'].' м/с';
    echo '<li>Влажність: '.$xml->humidity['value'].'&#37;</ul>';
}

echo '<form method="POST" action="weather.php">';
echo '<fieldset><legend>Введіть назву міста</legend>';
echo '<input type="text" name="city">';
echo '<input type="submit" name="submission" value = "Прогноз">';
echo '</fieldset></form>';
include ('includes/weather-footer.html');