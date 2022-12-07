(function($) {
   "use strict";	

   $(window).load(function() { 
      $('#status').fadeOut(); 
      $('#preloader').delay(350).fadeOut('slow'); 
      $('body').delay(350).css({'overflow':'visible'});
   });

   /*SUPERFISH*/

   $('.theme-menu').find('li:has(ul)').addClass('has-menu');
  // $('ul.sf-menu').superfish();


   /*FADE TIMEOUT*/

   setTimeout(function(){
      $(".wpcf7-response-output").fadeOut("slow", function () {
         $(".wpcf7-response-output").remove();
      });
   }, 5000);

})(jQuery);