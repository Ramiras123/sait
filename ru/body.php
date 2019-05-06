
        <?php 
        include("../connect.php");
        include("online.php");
         header("Content-Type: text/html; charset=utf-8");
         $title = "Автосалон |  Автомобили";
         include("text/hat.php");
         include("text/head.php");
        include("text/menu1.php"); 
        include("text/cotalog.php"); 
        include("text/footer.html"); 
        mysqli_close($link);
  ?>                    
    
                      
