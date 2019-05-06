<?php
 session_start();
if($_SESSION['id'] != "")
{   
    if($_SESSION['ONLINE'] >= strtotime('now'))
    {
        $onlinetime = strtotime('+15 min');
        $result =  "UPDATE `online` SET `online`.`online`='1', `online`.`time`='$onlinetime', `click` = `click`+'0.5' WHERE `online`.`id_user`='$_SESSION[id]'";
if (mysqli_query($link, $result)) {
} else {
  // echo "Error: " . $result . "<br>" . mysqli_error($link);
}
    } 
    $query = "SELECT `online`.`online` FROM `online` WHERE `online`.`id_user`='$_SESSION[id]'";
    $result = mysqli_query($link, $query); 
    if($result)
    {
      $rows = mysqli_num_rows($result); // количество полученных строк
      $row = mysqli_fetch_row($result);
      if ($row[0] == 0)
      {
        header("Location: ../ru/logout.php"); exit;
      }
    }
    $query = "SELECT `online`.`id_user` FROM `online` WHERE `online`.`time`<'" . strtotime('now') . "'";
    $result = mysqli_query($link, $query); 
    if($result)
    {
    $row = mysqli_fetch_array($result);
    do
    {
        $result1 =  "UPDATE `online` SET `online`.`online`='0' WHERE `online`.`id_user`='$row[id_user]'";
        if (mysqli_query($link, $result1)) {
      //      echo "New record created suc232cessfully";
        } else {
          // echo "Error: " . $result . "<br>" . mysqli_error($link);
        }
    }
    while($row = mysqli_fetch_array($result));
  }
  $result =  "UPDATE `online` SET `click` = `click`+'1' WHERE `online`.`id_user`='$_SESSION[id]'";
  if (mysqli_query($link, $result)) {
  } else {
  
  }

}
?>