        <?php
       include("connect.php");
        header("Content-Type: text/html; charset=utf-8");
        $title = "Автосалон |  О нас";
        include_once("ru/text/hat.php");
        include("ru/text/head.html");
        $query ="SELECT * FROM `Информация`";
 
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo '<div class="contentmenu">';
                $row = mysqli_fetch_row($result);
                echo "$row[1]";
            mysqli_free_result($result);
            echo "</div></body>";
        }         
        mysqli_close($link);
        include("ru/text/footer.html");

        ?>
           
