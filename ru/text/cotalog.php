<div class="content" align="center" style="height: auto">  
<?php  

if((($_GET["r8"] == "r8") && ($_GET["q7"] == "q7") && ($_GET["q5"] == "q5") &&
isset($_GET['check'])) || (($_GET["all"] == "all") &&
isset($_GET['check'])))
{
include("../ru/body/text2.php");
include("../ru/body/text3.php");
include("../ru/body/text4.php");
}
else 
if(($_GET["r8"] == "r8") && ($_GET["q7"] == "q7") && 
isset($_GET['check'])) 
{
include("../ru/body/text3.php");
include("../ru/body/text4.php");
} else 
if(($_GET["r8"] == "r8") && ($_GET["q5"] == "q5") && 
isset($_GET['check'])) 
{
include("../ru/body/text2.php");
include("../ru/body/text4.php");
} else 
if(($_GET["q5"] == "q5") && ($_GET["q7"] == "q7") && 
isset($_GET['check'])) 
{
include("../ru/body/text2.php");
include("../ru/body/text3.php");
} else 
    if(($_GET["q5"] == "q5") && 
    isset($_GET['check'])) 
{
    include("../ru/body/text2.php");
} else 
if(($_GET["q7"] == "q7") && 
isset($_GET['check'])) 
{
include("../ru/body/text3.php");
} else 
if(($_GET["r8"] == "r8") && 
isset($_GET['check'])) 
{
include("../ru/body/text4.php");
} else 
if((($_GET["gt"] == "gt") && 
isset($_GET['check1'])) || (($_GET["all1"] == "all1") &&
isset($_GET['check1'])))
{
    include("../ru/body/newcar.html"); 
} else 
if(($_GET["gt"] == "gt") && 
isset($_GET['check1'])) 
{
include("../ru/body/newcar.html");
} else 
if($_GET["mr"] == "newcar") 
{
    include("../ru/body/newcar.html");
} else 
if($_GET["mr"] == "testdrive") {
    include("../ru/body/testdrive.html");
}
 else
if (isset($_GET['check']) || isset($_GET['check1'])){
    echo "<script>alert(\"Ты пидор, не делай так\");</script>"; 
    include("../ru/body/text1.php");

} else
 {
    include("../ru/body/text1.php");
}

?>

</div>