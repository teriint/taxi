$(document).ready(function() {
   $('.validate-message').fadeIn();
   $('.correct-responses').fadeIn();
   $('.close').bind("click", function () {
       $(this).parent().fadeOut();
   })
});
