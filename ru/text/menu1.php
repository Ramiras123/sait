<html>
    
<?php
echo '<div id="blockid1"> <form action="../ru/body.php" method="GET"><h3 class="widget-title">Категории</h3>';
echo '<ul class="widget-list">';
$query ="SELECT `Меню_контента`.`Информация`, `Подразделы`.`Информация` FROM `Подразделы`, `Информация_контента`, `Меню_контента`, `Контент` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел` and `Информация_контента`.`Контент_idКонтент` = `Контент`.`idКонтент`  and `Контент`.`Idменю` = `Меню_контента`.`idМеню_контента`
and `Информация_контента`.`Контент_idКонтент` = 1";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    $row = mysqli_fetch_row($result);
    echo"<li><details><summary><a>$row[0]</a></summary>";
    for ($i = 0 ; $i < $rows; ++$i)
    {
      echo "<input name='check_list[]' type='checkbox' value='$row[1]'/>$row[1]";
      $row = mysqli_fetch_row($result);
    }
    echo "<br><input name='check_list[]' type='checkbox'   value='all'/>Выбрать всех";
    echo "<br><input name='check' type='submit' value='Подтвердить'/></details></li>"; 
  }
  $query ="SELECT `Меню_контента`.`Информация`, `Подразделы`.`Информация` FROM `Подразделы`, `Информация_контента`, `Меню_контента`, `Контент` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел` and `Информация_контента`.`Контент_idКонтент` = `Контент`.`idКонтент`  and `Контент`.`Idменю` = `Меню_контента`.`idМеню_контента`
  and `Информация_контента`.`Контент_idКонтент` = 2";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    $row = mysqli_fetch_row($result);
    echo"<li><details><summary><a>$row[0]</a></summary>";
    for ($i = 0 ; $i <= rows; ++$i)
    {
      echo "<input name='check_list[]' type='checkbox' value='$row[1]'/>$row[1]";
      $row = mysqli_fetch_row($result);
    }
    echo "<br><input name='check_list[]' type='checkbox'  value='a1'/>Выбрать всех";
    echo "<br><input name='check' type='submit' value='Подтвердить'/>";
    echo "</details></li>";
} 
$query ="SELECT `Меню_контента`.`Информация`, `Подразделы`.`Информация` FROM `Подразделы`, `Информация_контента`, `Меню_контента`, `Контент` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел` and `Информация_контента`.`Контент_idКонтент` = `Контент`.`idКонтент`  and `Контент`.`Idменю` = `Меню_контента`.`idМеню_контента`
and `Информация_контента`.`Контент_idКонтент` = 3";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    $row = mysqli_fetch_row($result);
    echo "<li><a  href='?&testdrive=testdrive'>$row[0]</a></li>";
    echo "</a></li>";
    echo "</ul></form></div>";
    
} 
?>
</html>