<html>
<?php 

if(isset($_POST['gl']))
        {            
           
            header("Location: ../index.php"); exit;
        }else if (isset($_POST['gl2']))
         {
            header("Location: body.php"); exit;
         } else  if (isset($_POST['gl3']))
         {
            header("Location: menu.php"); exit;
         } else if (isset($_POST['auto']))
          {
         header("Location: autor.php"); exit;
      }
        else if (isset($_POST['logout']))
        {
       header("Location: logout.php"); exit;
        } else
         {
            header("Location: ../index.php"); exit;
         }
?>  
</html>
