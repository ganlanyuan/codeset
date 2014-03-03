jQuery(document).ready(function($) {
  $('.lt-ie8 .alert-box .close').click(function() {
    $(this).parents('.alert-box').hide();
  });
});