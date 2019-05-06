        <?php
       include("connect.php");
       include("ru/online.php");
        header("Content-Type: text/html; charset=utf-8");
        $title = "Автосалон |  О нас";
        include_once("ru/text/hat.php");
        include("ru/text/head.php");
        ?>

<div id="countdown">
  <div id="tiles">
    <span id="days"></span> 
   <span id="hours"></span>
    <span id="minutes"></span>
    <span id="seconds"></span>
</div>
  <div class="labels">
    <li>Дней</li>
    <li>Часов</li>
    <li>Минут</li>
    <li>Секунд</li>
  </div>
</div>
<div class="btn_container">
 <a class="open_button" href="#">Подробнее</a>
</div>
<div class="modal_info">
 <h1>Поздравление</h1>
 <p>Мы с радостью сообщаем Вам об cкором открытии нашего корпоративного сайта. Некоторые разделы сайта еще не заполнены, но над этим ведется активная работа! Мы надеемся, что на нашем сайте Вы сможете найти исчерпывающую информацию по интересующим Вас вопросам!

</p>
</div>
<div class="modal_overlay">
</div>
        <?php
        $query ="SELECT `Информация_контента`.`Информация_контентаcol` FROM `Подразделы`, `Информация_контента` where `Подразделы`.`idПодразделы` = `Информация_контента`.`Подраздел`  and `Информация_контента`.`Контент_idКонтент` = 4";
 
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo '<div class="contentmenu">';
                $row = mysqli_fetch_row($result);
                echo "$row[0]";
            mysqli_free_result($result);
            echo "</div></body>";
        }         
        mysqli_close($link);
        ?>
<script> 
(function(){
  var $content = $('.modal_info').detach();

  $('.open_button').on('click', function(e){
    modal.open({
      content: $content,
      width: 540,
      height: 270,
    });
    $content.addClass('modal_content');
    $('.modal, .modal_overlay').addClass('display');
    $('.open_button').addClass('load');
  });
}());

var modal = (function(){

  var $close = $('<button role="button" class="modal_close" title="Close"><span></span></button>');
  var $content = $('<div class="modal_content"/>');
  var $modal = $('<div class="modal"/>');
  var $window = $(window);

  $modal.append($content, $close);

  $close.on('click', function(e){
    $('.modal, .modal_overlay').addClass('conceal');
    $('.modal, .modal_overlay').removeClass('display');
    $('.open_button').removeClass('load');
    e.preventDefault();
    modal.close();
  });

  return {
    center: function(){
      var top = Math.max($window.height() - $modal.outerHeight(), 0) / 2;
      var left = Math.max($window.width() - $modal.outerWidth(), 0) / 2;
      $modal.css({
        top: top + $window.scrollTop(),
        left: left + $window.scrollLeft(),
      });
    },
    open: function(settings){
      $content.empty().append(settings.content);

      $modal.css({
        width: settings.width || 'auto',
        height: settings.height || 'auto'
      }).appendTo('body');

      modal.center();
      $(window).on('resize', modal.center);
    },
    close: function(){
      $content.empty();
      $modal.detach();
      $(window).off('resize', modal.center);
    }
  };
}());
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="../css/timer.js"></script> 
       
   <?php
        include("ru/text/footer.html");
        ?>

