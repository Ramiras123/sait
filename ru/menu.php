 <?php 
         header("Content-Type: text/html; charset=utf-8");
         $title = "Автосалон |  Контакты";
         include_once("text/hat.php");
         include("text/head.php");
                  include("../connect.php");
                  include("online.php");
        $query ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 6";
 
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
                $row = mysqli_fetch_row($result);
                echo '<div class="menucont">';
                echo "$row[0]";
                echo " </div> </body>";
            
            mysqli_free_result($result);
        }         
        mysqli_close($link);
        include("text/footer.html"); 
  ?>                    
    
                
