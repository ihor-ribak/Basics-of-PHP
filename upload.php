<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Вигрузка файлів</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>"
      method="POST" enctype="multipart/form-data" >
    Виберіть зображення для вигрузки на сервер:
    <input type="file" name="image" >
    <input type="submit" value="Відправити файл">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $exp = pathinfo($name, PATHINFO_EXTENSION);
    $exp = strtolower($exp);
    if($exp!= 'png' && $exp!= 'jpg' && $exp!= 'gif')
    {
        echo 'Зображення повинно бути формату PNG, JPG або GIF ';
        exit();
    }

    if ($size > 512000)
    {
        echo 'Файл не повинен перевищувати 500 КБ';
        exit();
    }

    if (file_exists($name))
    {
        echo 'Файл '.$name.' уже був загружен';
        exit();
    }

    try
    {
        move_uploaded_file($temp, $name);
        echo 'Файл вигружен: '.$name;
        echo '<br><img src="'.$name.'">';
    }
    catch (Exception $e)
    {
        echo 'Збій вигрузки файла!';
    }
}

?>
</body>
</html>