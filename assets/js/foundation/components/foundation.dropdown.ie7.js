// foundation.dropdown.ie7.js
/* Use toggle in jquery1.9 */
$.fn.toggleClick=function(){var e=arguments,t=e.length;return this.each(function(i,s){var a=0;$(s).click(function(){return e[a++%t].apply(this,arguments)})})},window.log=function(){if(log.history=log.history||[],log.history.push(arguments),this.console){var e,t=arguments;t.callee=t.callee.caller,e=[].slice.call(t),"object"==typeof console.log?log.apply.call(console.log,console,e):console.log.apply(console,e)}},function(e){function t(){}for(var i,s="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(",");i=s.pop();)e[i]=e[i]||t}(function(){try{return console.log(),window.console}catch(e){return window.console={}}}());

// js start here
jQuery(document).ready(function($) {
  //click
  $('.lt-ie8 [data-dropdown]').toggleClick(function() {
    for (var i = 0; i < $('.lt-ie8 [data-dropdown]').length; i++) {
      var $thisData = $(this).attr('data-dropdown');
      var $thisLeft = $(this).offset().left;
      var $thisTop = $(this).offset().top;
      var $thisHeight = $(this).outerHeight();
      var $id = $('.lt-ie8 [data-dropdown-content]').eq(i).attr('id');
      if ( $thisData == $id) {
        $('.lt-ie8 [data-dropdown-content]').eq(i).show()
          .css({'left': $thisLeft,'top': $thisTop + $thisHeight});
      };
    };
    return false;
  }, function() {
    for (var i = 0; i < $('.lt-ie8 [data-dropdown]').length; i++) {
      var $thisData = $(this).attr('data-dropdown');
      var $id = $('.lt-ie8 [data-dropdown-content]').eq(i).attr('id');
      if ( $thisData == $id) {
        $('.lt-ie8 [data-dropdown-content]').eq(i).hide()
          .css('left', '-9999px');
      };
    };
    return false;
  });
});

