<?php

$poem = "\r\n\tНет, не смотрел никто из нас ";
$poem .= "\r\n\tС такой тоской в глазах ";
$poem .= "\r\n\tНа лоскуток голубизни ";
$poem .= "\r\n\tВ тюремних небесах ";

$filename = 'poem.txt';
$filestream = fopen($filename, 'w')
    or die('Невозможно открить файл!');

$num = fwrite($filestream, $poem);
if ($num)
{
    echo "$num байтов записано в файл $filename";
}
fclose($filestream);
