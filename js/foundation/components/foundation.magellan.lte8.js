// foundation.magellan.lte8.js
jQuery(document).ready(function($) {
  $(window).scroll(function() {
    // fixed
    var $divFixed = $('.lt-ie9 div[data-magellan-expedition="fixed"]');
    var $offsetTop = $divFixed.parent().offset().top;
    if ($(window).scrollTop() >= $offsetTop){
      $divFixed.css({'position': 'fixed', 'top': '0'});
    } else{
      $divFixed.css('position', 'static');
    };
    // active
    var $arrival = $('.lt-ie9 [data-magellan-arrival]');
    var $destination = $('.lt-ie9 [data-magellan-destination]');
    for (var i = 0; i < $destination.length; i++) {
      if ( $(window).scrollTop() >= $destination.eq(i).offset().top ) {
        $arrival.eq(i).addClass('active');
        $arrival.eq(i-1).removeClass('active');
      } else{
        $arrival.eq(i).removeClass('active');
      };
    };
  });
});

