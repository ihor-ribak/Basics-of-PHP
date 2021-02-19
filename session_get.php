<?php session_start();

if(isset($_SESSION['user']))
{
    $user = $_SESSION['user'];
    echo "<h1>Ласкаво просимо, $user!</h1><hr>";
    echo '<a href="session_data.php">Перегляд сессій</a>';
}
else
{
    echo 'Будь ласка, <a href="session_form.html">авторизуйтесь</a>';
}