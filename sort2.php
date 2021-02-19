<?php

$a = NULL;
$b = 8;
$c = 'PHP - це весело!';
$verb = ($b == 1)? 'угадали': 'не угадали';
echo "Ви $verb! Ви назвали число $b. <hr>";
$parity = ($b% 2!= 0)? 'непарне': 'парне';
echo "$b - $parity число<hr>";
$result = $a?? $b?? $c; echo "abc: $result <br>";
$result = $c?? $b?? $a; echo "cba: $result <br>";
