<?php session_start();

function kill_session()
{
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    session_destroy();
    echo '<hr>Сессія перервана<br>';
    echo 'Ідентифікатор сессії '.session_id().'<br>';
    var_dump($_SESSION);
}

if (count($_SESSION) > 0)
{
    echo '<dl> ';
    foreach ($_SESSION as $key => $value)
    {
        echo "<dt>Ключ: $key";
        echo "<dd>Значення: $value";
    }
    echo '</dl><hr>';
    echo 'Ідентифікатор сессії '.session_id().'<br>';
    var_dump($_SESSION);
    kill_session();
}
else
{
    echo 'Будь ласка, <a href="session_form.html">авторизуйтесь</a>';
}