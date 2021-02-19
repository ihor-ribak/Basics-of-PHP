<?php

$yes = TRUE;
$no = FALSE;
$result = ($no && $no)? 'TRUE': 'FALSE';
echo "no І no поверне $result <br>";
$result = ($yes && $no)? 'TRUE': 'FALSE';
echo "yes І no поверне $result <br>";
$result = ($yes && $yes)? 'TRUE': 'FALSE';
echo "yes І yes поверне $result <hr>";
$result = ($no || $no)? 'TRUE': 'FALSE';
echo "no Або no поверне $result <br>";
$result = ($yes || $no)? 'TRUE': 'FALSE';
echo "yes Або no поверне $result <br>";
$result = ($yes || $yes)? 'TRUE': 'FALSE';
echo "yes Або yes поверне $result <hr>";
$result = (! $yes)? 'TRUE': 'FALSE';
echo "Не yes поверне $result <hr>";

