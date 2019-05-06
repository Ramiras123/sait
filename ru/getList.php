<?php
// Функция

function onlinestatus($usersid)
{
  include("../connect.php");
    $query = "SELECT `online`.`online` FROM `online` WHERE `online`.`id_user` = '$usersid'";
    $result = mysqli_query($link, $query); 
    if($result)
    {
    $rows = mysqli_num_rows($result); // количество полученных строк
     $row = mysqli_fetch_row($result);
    if($row[0] == 0)
    {
        $onlinestatus =  "<font color='#FF0000'>O</font>";
    }
    elseif($row[0] == 1)
    {
        $onlinestatus = "<font color='#00F000'>O</font>";
    }
  } else {
    $onlinestatus = "<font color='#00F000'>error</font>";
  }
    return $onlinestatus;
}
 
?>
