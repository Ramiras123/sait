<?php
           include("../connect.php");
           include("online.php");
           header("Content-Type: text/html; charset=utf-8");
           $title = "Автосалон |  Автомобили";
           include("text/hat.php");
           include("text/head.php");
           
                      ?>

     <div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value="" required></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value="" required></label></p> 
	<p class="submit"><input class="button1" name="login"type= "submit" value="Log In"></p>
	<p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
   </form>
 

<?php
	session_start();
	?>

	<?php
	

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        
        $query ="SELECT * FROM `Пользователь` WHERE `Пользователь`.`Логин`='".$username."' AND `Пользователь`.`Пароль`='".$password."'";
        $result =mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        $numrows=mysqli_num_rows($result);
	if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($result))
 {
  $dbusername=$row['Логин'];
  $dbpassword=$row['Пароль'];
  

 }
  if($username == $dbusername && $password == $dbpassword)
 {
	// старое место расположения
          session_start();
        
        
         $query1 ="SELECT `idПользователь`, `Должность` FROM `Пользователь` WHERE `Пользователь`.`Логин`='".$username."'";
         $result1 =mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));
         $rows = mysqli_num_rows($result1); // количество полученных строк
         $row = mysqli_fetch_row($result1);
         $_SESSION['session_username']=$username;
         $_SESSION['id'] = $row[0];
         $_SESSION['dolj'] = $row[1];
         $_SESSION['ONLINE'] = strtotime('+30 sec');
         $result = "UPDATE  `online` SET `online`.`online` = '1' WHERE  `online`.`id_user` = '$row[0]'";
         if (mysqli_query($link, $result)) {
                echo "New record created successfully";
            } else {
              // echo "Error: " . $result . "<br>" . mysqli_error($link);
            }

 /* Перенаправление браузера */
       header("Location: body.php");
         
        }
        
	} else {	
        echo '<p style="color: red;">'.'MESSAGE: Invalid username or password!</p>';
 }
	} else {
                echo '<p style="color: red;">'.'MESSAGE: All fields are required!</p>';
        }
	}
	
	?>
 </div>
  </div>
           
<?php
   //    include("text/footer.html"); 
       mysqli_close($link);

        ?>
</body>