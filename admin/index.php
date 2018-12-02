<?php
$login = 'admin';
$password = 'admin';


if(isset($_POST['login']) && isset($_POST['password']))  {
if($_POST['login'] == $login && $_POST['password'] ==$password){
    include 'templates/panel.php';
}
else{
    echo "<script>alert('Вы ввели неправильные значения!')</script>";
    
    include 'templates/index.html';
}
}
else{
    include 'templates/index.html';
}
?>