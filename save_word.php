<!DOCTYPE html>
<html>
<body>

<?php


if(isset($_POST['name']) && isset($_POST['year']) && isset($_POST['author'])){
 
    // подключаемся к серверу
    require_once 'bd.php'; 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $year = htmlentities(mysqli_real_escape_string($link, $_POST['year']));
    $author = htmlentities(mysqli_real_escape_string($link, $_POST['author'])); 
    // создание строки запроса
    $query ="insert book(name,year,author) VALUES('$name','$year','$author')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "Книга добавлена. <a href='index.php'> Перейти к списку</a>";
    }
 else {
    echo "Книга не добавлена";
    }

}
?>
</body>
</html>


