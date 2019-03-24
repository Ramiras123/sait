 <?php 
         header("Content-Type: text/html; charset=utf-8");
         $title = "Автосалон |  Контакты";
         include_once("text/hat.php");
        include("text/head.html");
        include("../connect.php");
        $query ="SELECT * FROM `Информация` where `Информация`.`idИнформация` = 3 ";
 
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
                $row = mysqli_fetch_row($result);
                echo '<div class="menucont">';
                echo "$row[1]";
                echo " </div> </body>";
            
            mysqli_free_result($result);
        }         
        mysqli_close($link);
        include("text/footer.html"); 
  ?>                    
    
                
