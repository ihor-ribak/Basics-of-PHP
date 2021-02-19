<?php

define('USER', 'Ігорян');
define('PETS', ['котенок', 'щенок', 'хомячок']);
echo '<p>Привет, '. USER. '. Как поживает твой '. PETS[1]. '?</p>';
echo '<p>Ти используешь движок PHP версии '. PHP_VERSION;
echo ', запущений в '. PHP_OS. '</p>';