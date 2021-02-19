<?php

$page_title = 'PHP - Пуплікація повідомлень';

include ('includes/header.html');
echo '<form action="process.php" method="POST" accept-charset="utf-8">
Імя: <input name="first_name" type="text">
Фамілія: <input name="last_name" type="text">
<p>Тема:<br>
<input name="subject" type="text" size="64"></p>
<p>Повідомлення:<br>
<textarea name="message" rows="5" cols="50"></textarea></p>
<p><input type="submit" value="Відправити"></p>
</form>';

echo '<p><a href="forum.php">Повернутись до форуму</a></p>';
include ('includes/footer.html');