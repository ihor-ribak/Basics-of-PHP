<?php

if ($_SERVER['REQUEST_METHOD']!= 'POST')
{
  echo '
  <form action="single.php" method="POST">
  <fieldset>
  <legend>Необхідно указати коментарій!</legend>
  <textarea rows="5" cols="40" name="comment">
  </textarea>
  </fieldset>
  <p><input type="submit" ></p>
  </form>';
}
else
{
    if (!empty ($_POST['comment']))
    {
        $comment = $_POST['comment'];
        echo "Коментарій: $comment";
    }
    else
    {
        $comment = NULL;
        echo 'Необхідно указати коментарій!';
    }
}
