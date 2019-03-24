<!doctype html>
   <html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <meta charset="utf-8">
                <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
                <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
                <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
                <?php global $title; ?>
                <title><?php echo isset($title) ? $title : "Ошибка"; ?></title>
                <script type="text/javascript">
$(document).ready(function() {
var start_pos=$('#blockid').offset().top;
 $(window).scroll(function(){
  if ($(window).scrollTop()>=start_pos) {
      if ($('#blockid').hasClass()==false) $('#blockid').addClass('fixed');
  }
  else $('#blockid').removeClass('fixed');
 });
});
</script>

        </head>
<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
<a href="../../index.php" class="a1"><header class="header"></header></a>
   