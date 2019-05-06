<div class="content">  
<?php  
 $query2[] ="";
 $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and (`Информация_контента`.`Контент_idКонтент` = 1 or `Информация_контента`.`Контент_idКонтент` = 2)";  
 $i = 0;
    if(!empty($_GET['check_list'])) {
        $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 1";  
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
            $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя`FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and 
                `Информация_контента`.`Контент_idКонтент` = 1";   

         } else 
         
        if ($check == "a1") 
            {
               $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  
               and `Информация_контента`.`Контент_idКонтент` = 2";   
            }  
         else
                {
        $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 1";   
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
    if(!empty($_GET['check_list1'])) {
        $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 2";  
         foreach($_GET['check_list1'] as $check) {
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
            $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and 
                `Информация_контента`.`Контент_idКонтент` = 1";   

         } else 
         
        if ($check == "a1") 
            {
               $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  
               and `Информация_контента`.`Контент_idКонтент` = 2";   
            }  
         else
                {
        $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`,`Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 2";   
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
    $query1 ="SELECT `Информация_контента`.`Информация_контентаcol`, `Информация_контента`.`idИнформация_контента`, `Информация_контента`.`idПользователя` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 3"; 
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
        echo '<div id="td2">';
        session_start();
        echo "$row[0]";
        if((isset($_SESSION["session_username"])) and (($_SESSION['dolj'] == 1) or ($row[2] == $_SESSION['id']) or ($_SESSION['dolj'] == 5) or ($_SESSION['dolj'] == 4))){
           
            echo '<form action="delete.php" method="GET">';
            echo "<button name = 'box[]' type='submit' class='button1' value='$row[1]'>Удалить</button>";
            echo '</form>';
            echo '<form action="upd.php" method="POST">';
            echo "<button name = 'box[]' type='submit' class='button1' value='$row[1]'>Редактировать</button>";
            echo '</form>';
        
    }
        $row = mysqli_fetch_row($result);
        echo "</div>";
    }
    mysqli_free_result($result);
} 
//mysqli_close($link);
/*
реализовать добавление автомобиля и форму проверка.  
<input type="text" name="name" placeholder="Название" required />

*/
?>
    <div id="zatemnenie">
    <form action="form.php" method="POST" enctype="multipart/form-data"  class="form">
    <h1 align="center">Добавление</h1>
    <div class="form__field">
        <p align="left">Выберете качество машины
		<select name="car" require>
            <option>Новые автомобили</option>
            <option>Автомобили с пробегом</option>
        </select>
        </p>
	</div>
	<div class="form__field">
    
        <p align="left">Выберете марку машины
 <?php 
 echo $_POST['car'];
$query2 ="SELECT DISTINCT `Контент`.`Название`, `Подразделы`.`Информация` FROM `Подразделы`, `Информация_контента`,  `Контент` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел` and `Информация_контента`.`Контент_idКонтент` = `Контент`.`idКонтент` and (`Информация_контента`.`Контент_idКонтент` = 1 or `Информация_контента`.`Контент_idКонтент` = 2)";
echo   "<select name='mark' autofocus required>";
    $result = mysqli_query($link, $query2); 
    if($result)
    {
            $rows = mysqli_num_rows($result); // количество полученных строк
            $row = mysqli_fetch_row($result);
            for ($i = 0 ; $i < $rows; ++$i)
            {    
            echo '<option>';
            echo "$row[1]";
            $row = mysqli_fetch_row($result);
            echo "</option>";
        }
    } 
       echo "</select>";
    ?>
    </p>
    </div>

    <div class="form__field">
        <p align="left">Название машины
		<input  class="input1" type="text" name="name" placeholder="Название машины" minlength="5" maxlength="20" required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Цена машины в рублях
		<input class="input1" type="number" size="1" name="num" min="50000" max="10000000" placeholder="минимальная цена 50 тысяч рублей"  required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Разгон до 100 км/ч
		<input class="input1" type="number" name="razg" placeholder="c 1 до 10" min="1" max="10" required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Мощность в лошадиных силах(кВт)
		<input class="input1" type="number" name="moch" placeholder="со 100 до 900" min="100" max="900" required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Максимальная скорость(км/ч)
		<input class="input1" type="number" name="scor" placeholder="с 150 до 550" min="150" max="550" required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Двигатель
		<input class="input1" type="text" name="dv" placeholder="Все о двигателе" minlength="5" maxlength="150" required/>
        </p>
	</div>
    <div class="form__field">
        <p align="left">Расход топлива
		<input  class="input1" type="text" name="topl" placeholder="Все о расходе" minlength="5" maxlength="150" required/>
        </p>
	</div>
	<div class="form__field">
    <p align="left">Описание машины</p>
   <textarea rows="10" name="text" cols="70" placeholder="Введите текст" required></textarea>
    </div>
	<div class="form__field">
    <p align="left">Фото машины</p>
     <p><input class="input1" type="file" name="photo" multiple accept="image/*,image/jpeg,image/png" required/>
	</div>
	<button type="submit">Отправить</button>
</form>
      <br>
        <a href="#" class="close">Закрыть окно</a>
    </div>

<?php if((isset($_SESSION["session_username"])) && ((($_SESSION['dolj'] == 5 ) || ($_SESSION['dolj'] == 4) || $_SESSION['dolj'] == 1) || ($_SESSION['dolj'] == 2))){ ?>
    <a href="#zatemnenie">Добавить запись</a>
    <?php  } mysqli_free_result($result); ?>
    
</div>