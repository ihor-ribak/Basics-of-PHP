<?php

$info = "\r\n\r\n\tБаллада Рєдингской тюрьми";
$info .= "\r\n\t\t\tОскар Уайлд, 1898";

$filename = 'poem.txt';
$filestream = fopen($filename, 'a')
    or die('Невозможно открить файл!');
$num = fwrite($filestream, $info);
if ($num)
{
    echo "$num байт записано в файл $filename";
}
fclose($filestream);
