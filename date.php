<?php

echo 'Дата: '.date('jS F Y').'<br>';
echo 'День неділі: '.date('l').'<br>';
echo 'Час: '.date('h: i: s a').'<br>';
echo 'Часовий пояс: '.date_default_timezone_get().'<hr>';
date_default_timezone_set('Europe/London');
echo 'Теперішній часовий пояс: '.date_default_timezone_get();
echo "<br>теперішній час: ".date('h: i: s').'<hr>';
$d = strtotime('tomorrow');
echo 'Завтра: '.date('l, jS F Y', $d).'<br>';
$d = strtotime('August 18, 1979');
echo 'День народження Михаила: '.date('jS F', $d);