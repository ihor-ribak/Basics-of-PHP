<?php

$page_title = 'PHP - Помилки';

include ('includes/header.html');

function fail ($str)
{
    echo "<p>Будь ласка, укажіть $str.</p>";
    echo '<p><a href="post.php">Написати повідомлення</a>';
    include ('includes/footer.html');
    exit();
}

if (isset($_POST['message']))
{
    if (!empty(trim($_POST['first_name'])))
    {
        $first_name = addslashes($_POST['first_name']);
    }
    else
    {
        fail('імя');
    }

    if (!empty(trim($_POST['last_name'])))
    {
        $last_name = addslashes($_POST['last_name']);
    }
    else
    {
        fail('фамілію');
    }

    if (!empty(trim($_POST['subject'])))
    {
        $subject = addslashes($_POST['subject']);
    }
    else
    {
        fail('тему');
    }

    if (!empty(trim($_POST['message'])))
    {
        $message = addslashes($_POST['message']);
    }
    else
    {
        fail('текст повідомлення');
    }

    require ('connect_db.php');

    $sql = "INSERT INTO forum
(first_name, last_name, subject, message, post_date)
VALUES 
('$first_name', '$last_name', '$subject', '$message', NOW()) ";

    $result = mysqli_query($dbc, $sql);
}

if (mysqli_affected_rows($dbc)!= 1)
{
    echo '<p>Помилка</p>'.mysqli_error($dbc);
    mysqli_close($dbc);
}
else
{
    mysqli_close($dbc);
    header('Location: forum.php');
}