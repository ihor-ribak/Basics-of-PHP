<?php

$filestream = fopen('index.html', 'r');
$data = array('PHP', 1, 2.3, TRUE, NULL, array(), new Directory, $filestream);
foreach ($data as $type)
{
    var_dump($type);
    echo '<br> ';
}
fclose($filestream);
echo getType($filestream);
