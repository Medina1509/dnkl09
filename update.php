<!DOCTYPE html>
<html>
<body>

<?php
require_once 'bd.php';
if(isset($_POST['name']) && isset($_POST['year']) && isset($_POST['author']) && isset($_POST['id'])){
 
    // подключаемся к серверу
    require_once 'bd.php'; 
     
    // экранирования символов для mysql
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $year = htmlentities(mysqli_real_escape_string($link, $_POST['year']));
    $author = htmlentities(mysqli_real_escape_string($link, $_POST['author'])); 

     
    $query ="update book SET name='$name', year='$year', author='$author' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}
?>
<form action="add.php">
  <input value="Добавить слово" type="submit">
</form> 
<form action="update.php">
  <input value="Редактировать" type="submit">
</form> 
<form action="index.php">
  <input value="Список слов" type="submit">
</form> 
</body>
</html>


