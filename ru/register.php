<?php
           include("../connect.php");
           header("Content-Type: text/html; charset=utf-8");
           $title = "Автосалон |  Автомобили";
           include("text/hat.php");
           include("text/head.php");
                      ?>
     <div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
<form action="register.php" id="registerform" method="post"name="registerform">
 <p><label for="user_login" required>Полное имя<br>
 <input class="input" id="full_name" name="full_name"size="32"  type="text" value="" required></label></p>
<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" value="" required></label></p>
<p><label for="user_pass">Логин<br>
<input class="input" id="username" name="username"size="20" type="text" value="" required></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password" size="32"   type="password" value="" required></label></p>
<p><label for="user_pass">Повторите пароль<br>
<input class="input" id="password1" name="password1" size="32" onChange="checkPasswordMatch();"   type="password" value="" required></label></p>
<p class="submit"><input class="button1" id="register" name= "register" type="submit" value="Зарегистрироваться" ></p>
	  <p class="regtext">Уже зарегистрированы? <a href= "autor.php">Введите имя пользователя</a>!</p>
 </form>
 <div class="registrationFormAlert" id="divCheckPasswordMatch">
</div>
            
         <?php
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password1'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $password1=htmlspecialchars($_POST['password1']);

 if ($password != $password1) 
            {
            echo "Пароли не совпадают";
            }
             else {
 $query=("SELECT * FROM `Пользователь` WHERE 	`Пользователь`.`Логин`='".$username."'");
 $result =mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  $numrows=mysqli_num_rows($result);
if($numrows==0)
   {
	$sql="INSERT INTO `Пользователь` (`idПользователь`, `Пароль`, `Имя`, `Должность`, `Логин`, `email`) 
	VALUES(NULL,'$password', '$full_name', '2', '$username', '$email')";
  $result=mysqli_query($link,$sql);
 if($result){
  echo "<script>alert(\"Account Successfully Create\");</script>"; 
 // header("Location: autor.php");

} else {
 $message = "Failed to insert data information!";
  }
	} else {
    $message = "That username already exists! Please try another one!";
   }
  }
 }
  else {
    $message = "All fields are required!";
  }
$query=("SELECT `idПользователь` FROM `Пользователь` WHERE 	`Пользователь`.`Логин`='".$username."'");
 $result =mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  $rows = mysqli_num_rows($result); // количество полученных строк
  $row = mysqli_fetch_row($result);
  $sql="INSERT INTO `online` (`id`, `online`, `click`, `id_user`, `time`) 
	VALUES(NULL,'0', '0', '$row[0]', '0')";
  $result=mysqli_query($link,$sql);
	}
	?>

    <?php if (!empty($message)) {echo '<p>'.'MESSAGE: '.$message.'</p>';
    }    
    mysqli_close($link);
    ?>
</div>
</div>