<?php 
 include("../connect.php");
 include("online.php");
$i = htmlspecialchars($_POST['mark']);
$query ="SELECT DISTINCT `Подразделы`.`idПодразделы` FROM `Подразделы` where `Подразделы`.`Информация` = '$i' ";
$result = mysqli_query($link, $query); 
if($result)
{
        $rows = mysqli_num_rows($result); // количество полученных строк
        $row = mysqli_fetch_row($result);
        $mark = $row[0];
} 
$i = htmlspecialchars($_POST['car']);
$query ="SELECT DISTINCT `Контент`.`Название`, `Контент`.`idКонтент` FROM `Контент` where `Контент`.`Название` = '$i'";
$result = mysqli_query($link, $query); 
if($result)
{
        $rows = mysqli_num_rows($result); // количество полученных строк
        $row = mysqli_fetch_row($result);
        $car = $row[1];
        $cars = $row[0];
} 
$filePath  = $_FILES['photo']['tmp_name'];
$errorCode = $_FILES['photo']['error'];

if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {

    $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
    ];

    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';

    $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;

    die($outputMessage);
}

$fi = finfo_open(FILEINFO_MIME_TYPE);
$mime = (string) finfo_file($fi, $filePath);
if (strpos($mime, 'image') === false) 
{
    echo "<script>alert(\"Нельзя загрузить такой файл\");</script>"; 
    header("Content-Type: text/html; charset=utf-8");
    $title = "Автосалон |  Автомобили";
    include("text/hat.php");
   include("text/head.html");
   include("text/menu1.php"); 
   echo '<div class="content">';
   echo '<div class="errors">Error вы не можете загрузить это</div>';
   echo "</div>";
   include("text/footer.html"); 
} else 
{
    $uploaddir = '../images/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);

if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    die('При записи изображения на диск произошла ошибка.');
}

$cars = $_POST['name'];
$razg = $_POST['razg'];
$moch = $_POST['moch'];
$scor = $_POST['scor'];
$dv = $_POST['dv'];
echo $uploadfile;
$topl = $_POST['topl'];
$text = htmlspecialchars($_POST['text']);
$num = htmlspecialchars($_POST['num']);
$full = '<img src='.$uploadfile.' width="100%" height="auto" class="imgs"><p align="center">'.$cars.'</p ><p align="center">'.$num.'p.</p><details class="details1 summary"><summary>Информация</summary><p><br><b>Разгон до 100 км/ч:</b>'.$razg.' секунд<br><b>Мощность в лошадиных силах:</b>'.$moch.' кВт<br><b>Максимальная скорость:</b>'.$scor.' км/ч<br><b>Двигатель:</b>'.$dv.'<br><b>Расход топлива:</b>'.$topl.'<br><br> <b>Комментарий предыдущего владельца:</b><br>'.$text.'</p></details>';
$db_table= `Информация_контента`;
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$query ="SELECT DISTINCT `Контент`.`Название`, `Подразделы`.`Информация` FROM `Подразделы`, `Информация_контента`,  `Контент` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел` and `Информация_контента`.`Контент_idКонтент` = `Контент`.`idКонтент` and `Информация_контента`.`Контент_idКонтент` = $car";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
echo "yes";
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
echo "$row[0]";
}  else 
{
    echo "no";
}
session_start();
$id = $_SESSION['id'];
$result =  "INSERT INTO `Информация_контента` (`idИнформация_контента`, `Информация_контентаcol`, `Контент_idКонтент`, `Подраздел`, `idПользователя`)  VALUES (NULL, '$full', '$car', '$mark', '$id' )";
if (mysqli_query($link, $result)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $result . "<br>" . mysqli_error($link);
}

header("Location: body.php");
}
?>


