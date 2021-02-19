<?php
if (!empty($_POST['quantity']))
{
    $quantity = $_POST['quantity'];
    if (!is_numeric($quantity))
    {
        $quantity = NULL;
        echo 'Количество необходимо указать в виде числа<br>';
    }
}
else{
    $quantity = NULL;
    echo 'Необходимо указать количество <br>';
}

if (!empty($_POST['email']))
{
    $email = $_POST['email'];
    $pattern = '/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/';
    if (!preg_match($pattern, $email))
    {
        $email = NULL;
        echo "Адрес електронной почти указан в недопустимом формате";
    }
}
else
{
    $email = NULL;
    echo "Необходимо указать адрес електронной почти";
}

if (($quantity!= NULL) && ($email!= NULL))
{
    echo "Адрес email: $email<br>Количество: $quantity ";
}
?>