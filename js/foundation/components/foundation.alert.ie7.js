// foundation.alert.ie7.js
jQuery(document).ready(function($) {
  $('.lt-ie8 .alert-box').find('.close').click(function() {
    $(this).parent().fadeOut(400);
  });
});