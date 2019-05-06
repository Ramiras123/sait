<?php 
 include("../connect.php");
 
if(!empty($_GET['box'])) {
foreach($_GET['box'] as $check) {
    $s = $check;
}
}
$result = "DELETE FROM `Информация_контента` WHERE `Информация_контента`.`idИнформация_контента` = '$s'";

if (mysqli_query($link, $result)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $result . "<br>" . mysqli_error($link);
}
header("Location: body.php"); exit;
?>