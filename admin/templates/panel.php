<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница редактирования контента</title>
     <link rel="stylesheet" href="../../admin/style/panel.css">
</head>
<body>

<?php 
 include("../functions/functions.php");
 $stat = get_articles($conn); // вызов функции получения данных о постах

?>
<div class ="btn">
    <a href="../../index.php">Вернутся на сайт</a>
</div>
<table>

<?php 
        foreach($stat as $staty): // перебираем массив постов
?>
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th colspan="3">Текст</th>
        
    </tr>
        <td><?=$staty['date'] //дата статьи?></td>
        <td><?=$staty['headline'] //заголовок статьи?></td>
        <td><?=$staty['text'] //текст статьи?></td>
        <td><a href="panel.php?action=edit&id=<?=$staty['id']?>">Редактировать</a></td>
        <td><a href="panel.php?action=delete&id=<?=$staty['id']?>">Удалить</a></td>
    <tr>

    </tr>
    <?php
        endforeach; //заканчиваем перебирать массив постов
?>
</table>
<div class ="btn">
    <a href="panel.php?action=add">Добавить новую статью</a>
</div>

</body>
</html>