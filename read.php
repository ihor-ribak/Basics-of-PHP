<?php

$filestream = fopen('manifesto.txt', 'r')
    or die('Невозможно открить файл!');
echo fread($filestream, filesize('manifesto.txt'));
fclose($filestream);