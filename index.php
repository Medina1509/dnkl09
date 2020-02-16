<!DOCTYPE html>
<html>
<body>

<?php
require_once 'bd.php';
$query = "select * from book";
$result = mysqli_query($link,$query);
if ($result)
{
	$rows = mysqli_num_rows($result); // количество полученных строк
    echo "<table><tr><th></th><th></th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
       echo "</tr>";
    }
    echo "</table>";
}
?>
<form action="add.php">
  <input value="Добавить слово" type="submit">
</form> 
<form action="update_word.php">
  <input value="Редактировать" type="submit">
</form> 
</body>
</html>


