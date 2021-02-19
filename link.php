<?php

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    switch ($id)
    {
        case 1: echo 'Вибрана корова<hr>';
        break;
        case 2: echo 'Вибрана лошадь<hr>';
        break;
        case 3: echo 'Вибрана коза<hr>';
        break;
    }
}

echo '<h1>Виберіть тварину</h1>';
echo '  <p><a href="link.php?id=1">Корова</a> |';
echo '  <p><a href="link.php?id=2">Лошадь</a> |';
echo '  <p><a href="link.php?id=3">Коза</a></p>';