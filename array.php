<?php
$days = array('Понеділок', 'Вівторок', 'Середа');
foreach ($days as $value)
{
    echo "&bull; $value ";
}
$months = array('січ' => 'Січень', 'лют' => 'Лютий', 'бер' => 'Березень');
echo '<dl>';
foreach ($months as $key => $value)
{
    echo "<dt>$key<dd>$value";
}
echo '</dl>';

$ten = range(1, 10);
$alf = range(a, z);
foreach ($ten as $value)
{
    echo "$value<br>";
}
foreach ($alf as $value)
{
    echo "$value<br>";
}
