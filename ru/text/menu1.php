<html>
    
<?php 

$menu=array(
    array("link"=>"Автомобили с пробегом", "href" => "?&mr=a1"),
    array("link"=>"Новые автомобили", "href" => "#", "id" => "a2"),
    array("link"=>"Тест драйв", "href" =>"#", "id" => "a3")

);

?>
<?php
$pages = 3;
echo '<div class="sidebar" align="left"> <form action="../ru/body.php" method="GET"><h3 class="widget-title">Категории</h3>';
echo '<ul class="widget-list">';
foreach($menu as $item){
    echo "<li><a  href='{$item[href]}'>{$item[link]}</a></li>";
}
echo "</ul></form></div>";
?>
</html>