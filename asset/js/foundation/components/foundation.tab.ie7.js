// foundation.tab.ie7.js
jQuery(document).ready(function($) {
  $('.lt-ie8 [data-tab] dd').click(function() {
    $(this).addClass('active')
    .siblings().removeClass('active');
    var $thisParent = $(this).parent();
    $thisParent.siblings('.tabs-content').find('.content')
    .eq($thisParent.find('dd').index(this)).addClass('active')
    .siblings().removeClass('active');
    return false;
  });
});

