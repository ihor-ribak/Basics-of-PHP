<?php

$filestream = fopen('poem.txt', 'w')
or die('Невозможно открить файл!');
fwrite($filestream, 'Файл перезаписан!');
fclose($filestream);