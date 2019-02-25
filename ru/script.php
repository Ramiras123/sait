<html>
<?php 

if(isset($_POST['gl']))
        {            
           
            header("Location: ../index.php"); exit;
        }else if (isset($_POST['gl2']))
         {
            header("Location: body.php"); exit;
         } else 
         {
            header("Location: menu.php"); exit;
         }?>

</html>
