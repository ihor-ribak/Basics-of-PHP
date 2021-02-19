<?php
if (isset($_POST[definition]))
{
    $definition = $_POST['definition'];
}
else
{
    $definition = NULL;
}

if ($definition!= NULL)
{
    if ($definition!= 'Обьектно ориентированний')
    {
        echo "$definition = неправильно!";
    }
    else
    {
        echo "$definition = правильно!";
    }
}
else
{
    echo "Ви должни вибрать один из вариантов ответа!";
}
?>