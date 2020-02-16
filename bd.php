<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
if ($link = mysqli_connect($host, $user, $password, $database)) 
	echo "";
    else echo("Ошибка " . mysqli_error($link));
// выполняем операции с базой данных
// закрываем подключение
#mysqli_close($link);
?>