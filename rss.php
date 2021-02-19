<?php

$url = 'http://www.kaspersky.ru/rss/news';
$xml = simplexml_load_file($url) or die('Неможливо загрузити дані!');

//include ('includes/rss-header.html');
foreach ($xml->chanell->item as $item)
{
    echo '<a href="'.$item->link.'">' .$item->title.'</a>';
    echo '<br><small>'.$item->pudDate.'</small><br>';
    echo $item->description. '<hr>';
}
//include ('includes/rss-footer.html');
