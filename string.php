<! DOCTYPE  HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Начинаєм роботу с PHP</title>
</head>
<body>
<?php
#Тут має бути PHP код
$phrase = 'Правда редко бивает чистой';
$author = 'Оскар Уайльд';
echo $phrase;
echo "<p> Часто говорят что <q>$phrase</q></p>";
$phrase = $phrase. ' и никогда не бивает простой';
echo "<p><q>$phrase</q><site>$author</site></p>";
?>
</body>
</html>