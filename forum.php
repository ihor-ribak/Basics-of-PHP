<?php

$page_title = 'PHP - форум';

include ('includes/header.html');
require ('connect_db.php');

$sql = 'SELECT * FROM forum';
$result = mysqli_query($dbc, $sql);
if (mysqli_num_rows($result) > 0)
{
    echo '<table style="width: 300px; border: 1px solid black;"><tr colspan="2" bgcolor="#D3EDF6" align="center"><th>Автор</th><th>Тема</th><th id="msg">Повідомлення</th></tr>';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo '<tr><td bgcolor="green">'.
        $row['first_name'].' '.
        $row['last_name'].'<br>'.
        $row['post_date'].'</td><td bgcolor="green">'.
        $row['subject'].'</td><td bgcolor="green">'.
        $row['message'].'</td></tr>';
    }
    echo '</table>';
}
else
{
    echo '<p>В даний час повідомлень немає.</p>';
}

echo '<p><a href="post.php">Написати повідомлення</a></p>';
mysqli_close($dbc);
include ('includes/footer.html');
