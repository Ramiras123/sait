<?php
	  include("../connect.php");

	session_start();
	$id1 = $_SESSION['id'];
	$result2 = "UPDATE  `online` SET `online`.`online` = '0' WHERE  `online`.`id_user` = '$id1'";
	if (mysqli_query($link, $result2)) {
		   echo "New record created successfully";
	   } else {
		 // echo "Error: " . $result . "<br>" . mysqli_error($link);
	   }
	unset($_SESSION['session_username']);
	session_destroy();
	header("location:autor.php");
	?>