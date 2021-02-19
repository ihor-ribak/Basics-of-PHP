<?php

$zero = 0;
$nil = 0;
$one = 1;
$upr = 'A';
$lwr = 'a';
echo "0 == 0: "; var_dump($zero == $nil);
echo "<br>0 == 1: "; var_dump($zero == $one);
echo "<br>A == a: "; var_dump($upr == $lwr);
echo "<br>A != a: "; var_dump($upr != $lwr);
echo "<hr>1 > 0: "; var_dump($one > $nil);
echo "<br>0 >= 0: "; var_dump($zero >= $nil);
echo "<br>1 <= 0: "; var_dump($one <= $nil);
echo "<hr>1 <=> 0: "; var_dump($one <=> $nil);
echo "<hr>1 <=> 1: "; var_dump($one <=> $one);
echo "<hr>0 <=> 1: "; var_dump($nil <=> $one);
