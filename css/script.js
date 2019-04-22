$(document).ready(function() {
    var start_pos=$('#blockid').offset().top;
     $(window).scroll(function(){
      if ($(window).scrollTop()>=start_pos) {
          if ($('#blockid').hasClass()==false) $('#blockid').addClass('fixed');
      }
      else $('#blockid').removeClass('fixed');
     });
    });


