// foundation.accordion.ie7.js
jQuery(document).ready(function($) {
  //tab
  $('.lt-ie8 [data-tab] dd').click(function() {
    $(this).addClass('active')
    .siblings().removeClass('active');
    var $thisParent = $(this).parent();
    $thisParent.siblings('.tabs-content').find('.content')
    .eq($thisParent.find('dd').index(this)).addClass('active')
    .siblings().removeClass('active');
    return false;
  });

  //accordion
  $('.lt-ie8 [data-accordion] > dd > a').click(function() {
    var $content = $(this).siblings('.content');
    if ( $content.is(':visible')) {
      $content.removeClass('active');
    } else{
      $content.addClass('active');
      $(this).parent().siblings().find('.content').removeClass('active');
    };
    return false;
  });
});

