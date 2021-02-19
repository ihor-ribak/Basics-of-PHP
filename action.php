<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Интерактивная PHP форма</title>
</head>
<body>
<form action="action_handler.php" method="POST">
    <dl>
        <dt>Имя:</dt>
        <dd><input type="text" name="name"></dd>
        <dt>Адрес email:</dt>
        <dd><input type="text" name="mail"</dd>
        <dt>Примечание:</dt>
        <dd><textarea rows="5" cols="20" name="comment" ></textarea></dd>
    </dl>
    <p><input type="submit" ></p>
</form>
</body>
</html>