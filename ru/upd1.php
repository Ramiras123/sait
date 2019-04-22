<?php 
 include("../connect.php");
 header('X-XSS-Protection:0');
 header("Content-Type: text/html; charset=utf-8");
 $title = "Автосалон |  Автомобили";
 include("text/hat.php");
 include("text/head.php");
 include("text/menu1.php"); 
 echo '<div class="content">';
 $s = $_GET['upd3'];
 $p = $_GET['box12'];
// $query ="SELECT * FROM `Информация_контента` WHERE  `Информация_контента`.`idИнформация_контента` = '$p'";

 
 //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
// if($result)
// {
  //       $row = mysqli_fetch_row($result);
    //     echo "$row[1]";
    // mysqli_free_result($result);
 //}                 
 $result = "UPDATE  `Информация_контента` SET `Информация_контента`.`Информация_контентаcol` = '$s' WHERE  `Информация_контента`.`idИнформация_контента` = '$p'";


 
if (mysqli_query($link, $result)) {
    echo "New record created successfully";
} else {
  // echo "Error: " . $result . "<br>" . mysqli_error($link);
}
//echo $result;
header("Location: body.php"); exit;
echo "</div>";
include("text/footer.html"); 
?>