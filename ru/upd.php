<?php
 include("../connect.php");
 include("online.php");
header("Content-Type: text/html; charset=utf-8");
$title = "Автосалон |  Автомобили";
include("text/hat.php");
include("text/head.php");
include("text/menu1.php"); 
echo '<div class="content">';
if(!empty($_POST['box'])) {
    foreach($_POST['box'] as $check) {
      $s = $check;
     }
    }

    $query ="SELECT `Информация_контентаcol` FROM `Информация_контента` WHERE  `Информация_контента`.`idИнформация_контента` = '$s'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
      echo '<form action="upd1.php" method="GET">';
            $row = mysqli_fetch_row($result);
            echo   "<textarea id='full-featured' name='upd3'>$row[0]</textarea>";
      echo "<button name = 'box12' type='submit' value='$check'>Отправить</button>";
      echo '</form>';
        mysqli_free_result($result);
    }     

      
echo "</div>";
include("text/footer.html"); 

?>
<script src="../css/script1.js">
</script>