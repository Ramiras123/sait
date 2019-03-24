<div class="content">  
<?php  
 $query2[] ="";
 $i = 0;
 $query1 ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and (`Информация_контента`.`Контент_idКонтент` = 1 or `Информация_контента`.`Контент_idКонтент` = 2)";  
    if(!empty($_GET['check_list'])) {
         foreach($_GET['check_list'] as $check) {
            if ($check == "all" || $check == "a1") 
            {
                break;
            }
            else {
                $query2[$i] = $query2[$i]."`Подразделы`.`Информация` = '$check'";
                $i++;
            }
         }
         if ($check == "all") 
         {
            $query1 ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and 
                `Информация_контента`.`Контент_idКонтент` = 1";   

         } else 
         
        if ($check == "a1") 
            {
               $query1 ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  
               and `Информация_контента`.`Контент_idКонтент` = 2";   
            }  
         else
                {
        $query1 ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and (`Информация_контента`.`Контент_idКонтент` = 1 or `Информация_контента`.`Контент_idКонтент` = 2)";   
        $query1 .= " and ( ";
        for ($j = 0;$j<$i;$j++)
        {
            $query1 .= $query2[$j];
            $query1 .= " or ";
        }
        $query1 .= $query2[$j-1];
        $query1 .= " )";
    }
    } else 
    if (isset($_GET['check'])){
    
        echo '<div class="errors">Error вы не выбрали ни одного пункта</div>';
        $query1 = "";
    } else {

$query ="SELECT * FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 3";
$result = mysqli_query($link, $query) or die("Оши213бка " . mysqli_error($link)); 
if($result)
{
    $rows =  mysqli_num_rows($result);
    $row = mysqli_fetch_row($result);
    if(($_GET["testdrive"] == "$row[1]")) 
    {
    $query1 ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 3"; 
    mysqli_free_result($result);
    }
} 
    }

$result = mysqli_query($link, $query1); 
if($result)
{
    $rows =  mysqli_num_rows($result);
    $row = mysqli_fetch_row($result);
    for ($i = 0 ; $i < $rows; ++$i)
    {
        
        echo '<div class="td2" style="padding: 10px;">';
        echo "$row[0]";
        $row = mysqli_fetch_row($result);
        echo "</div>";
    }
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
 
</div>