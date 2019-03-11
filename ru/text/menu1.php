<html>
    
<?php 

$menu=array(
    array("link"=>"Автомобили с пробегом", "href" => "?&mr=car", "car1" => "q5",  "car2" => "q7",  "car3" => "r8",  "all" => "all"),
    array("link"=>"Новые автомобили", "href" => "?&mr=newcar", "car7" => "gt", "all" => "all1"),
    array("link"=>"Тест драйв", "href" => "?&mr=testdrive")

);

?>
<?php
$pages = 3;
echo '<div id="blockid1"  align="left"> <form action="../ru/body.php" method="GET"><h3 class="widget-title">Категории</h3>';
echo '<ul class="widget-list">';
foreach($menu as $item){
    if($item['car1'])
    {
        echo "<li><details><summary><a>{$item[link]}</a></summary>";
        echo "<br><input name='{$item[car1]}' type='checkbox' value='{$item[car1]}'/>Audi q5";
        echo "<br><input name='{$item[car2]}' type='checkbox' value='{$item[car2]}'/>Audi q7";
        echo "<br><input name='{$item[car3]}' type='checkbox' value='{$item[car3]}'/>Audi R8";
        echo "<br><input name='{$item[all]}' type='checkbox'  value='{$item[all]}'/>Выбрать всех";
        echo "<br><input name='check' type='submit' value='Подтвердить'/>";
        echo "</details></li>";
    } 
    else 
    if($item['car7'])
    {
        echo "<li><details><summary><a>{$item[link]}</a></summary>";

        echo "<br><input name='{$item[car7]}' type='checkbox' value='{$item[car7]}'/>Audi e-tron GT";
        echo "<br><input name='{$item[all]}' type='checkbox'   value='{$item[all]}'/>Выбрать всех";
        echo "<br><input name='check1' type='submit' value='Подтвердить'/>";
        echo "</details></li>";
    } 
    else 
   { echo "<li><a  href='{$item[href]}'>{$item[link]}</a></li>";
}
    echo "</a></li>";
}
echo "</ul></form></div>";
?>
</html>