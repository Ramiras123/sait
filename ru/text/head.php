

<div id="blockid">
                <form action="../ru/script.php" method="POST" >
        <input name="gl" type="submit" value="О нас" class="button"/>
        <input name="gl2" type="submit" value="Автомобили" class="button"/>
        <input src="../menu.html"  name="gl3"  type="submit" value="Контакты"  class="button"/>
        
        <?php
        session_start();
        if(isset($_SESSION["session_username"])){
	
        echo '<input src="#z1" name="prof"  type="submit" value="Профиль '.$_SESSION['session_username'].'"  class="button" style="margin-bottom: 0%; margin-right: 0%; margin-left: 120vh;"/>';
        echo '<input src="#z1" name="logout"  type="submit" value="Выход"  class="button" style="margin-bottom: 0%; margin-right: 0%; margin-left: 0vh;"/>';
	} else {?>
<input src="#z1" name="auto"  type="submit" value="Авторизация/регистрация"  class="button" style="margin-bottom: 0%; margin-right: 0%; margin-left: 120vh;"/>
        <?php } ?>
</form>
</div>                
<body>