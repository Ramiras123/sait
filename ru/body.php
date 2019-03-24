
        <?php 
        include("../connect.php");
         header("Content-Type: text/html; charset=utf-8");
         $title = "Автосалон |  Автомобили";
         include("text/hat.php");
        include("text/head.html");
        include("text/menu1.php"); 
        include("text/cotalog.php"); 
        include("text/footer.html"); 
        mysqli_close($link);
  ?>                    
    
                      
