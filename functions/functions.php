<?php
$host = 'localhost';
$login = 'root';
$password = '';
$db = 'coursework';

$conn = mysqli_connect($host,$login,$password,$db);

if(mysqli_connect_errno()){
    echo 'Ошибка подключения к БД';
    exit();
}

function get_articles($conn){ //получение постов

    $sql = "SELECT * FROM `articles`";
    $result = mysqli_query($conn, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $articles;
}

?>