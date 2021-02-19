<?php

$str = 'Most Users usually find PHP useful.';
echo "'$str'<br>Довжина строки: ".strlen($str);
echo "<br>Перше входження 'us':  ".strpos($str, 'us');
echo "<br>Останнє входження 'us':  ".strrpos($str, 'us');
echo "<hr>Підстрока від першого входження 'us':  ".strstr($str, 'us');
echo "<br>Підстрока від першого входження 'us' без врахування регістру:  ".stristr($str, 'us');
echo "<hr>Символи від першого входження 'u':  ".strchr($str, 'u');
echo "<hr>Символи від останнього входження 'u':  ".strrchr($str, 'u');
