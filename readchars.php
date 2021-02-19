<?php

$filestream = fopen('title.txt', 'r')
or die('Невозможно открить файл');

while($char = fgetc($filestream))
{
    echo $char.' * ';

}
fclose($filestream);