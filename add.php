<!DOCTYPE html>
<html>
<body>

<?php 
require_once 'bd.php';
?>
<form action="save_word.php" method="post">
<fieldset>        
<p>
<label><a>Название</a><br></label>
<input name="name" type="text" size="100" maxlength="100">
</p>  
<label><a>Год:</a><br></label>
<input name="year" type="text" size="100" maxlength="100">
</p>       
<p>
<label><a>Автор:</a><br></label>
<input name="author" type="text" size="100" maxlength="100">
</p>
<input type="submit" name="submit" value="Добавить слово">
<p>
<form action="index.php">
  <input value="Список слов" type="submit">
</form> 
</body>
</html>


