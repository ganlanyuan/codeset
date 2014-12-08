ready(function() {

  // check character length
  var checkLength = function(strTemp) {
    var i, sum;
    sum = 0;
    for(i = 0; i < strTemp.length; i++) {
      if ((strTemp.charCodeAt(i) >= 0) && (strTemp.charCodeAt(i) <= 255)) {sum = sum + 1; } 
      else { sum = sum + 2; }
    }
    return sum;
  };

  k('[data-tooltip]').mouseover(function(e) {
    if (!k(this).find('[am-tooltip]')) {
      // prepend tooltip
      var direction = k(this).attr('data-tooltip'),
          thisTitle = k(this).attr('data-title'),
          thisTitleLength = checkLength(thisTitle.replace(/(\n)|(\r\n)/g,'')),
          tooltip = "<div am-tooltip='" + direction + "'>" + thisTitle + "</div>",
          tTop = '0px', 
          tMarginTop = '0px', 
          tLeft = '0px', 
          tMarginLeft = '0px';
      k(this).prepend(tooltip);
      
      if (thisTitleLength > 30) {
        k(this).find('[am-tooltip]').css('width', '17em');
      } else {
        k(this).find('[am-tooltip]').css('white-space', 'nowrap');
      }

      // put tooltip to right position
      var thisW = k(this).outerWidth(),
          thisH = k(this).outerHeight(),
          tooltip = k(this).find('[am-tooltip]'),
          tooltipW = tooltip.outerWidth(),
          tooltipH = tooltip.outerHeight();
      if ((' '+direction+' ').indexOf(' top ') > -1 || (' '+direction+' ').indexOf(' bottom ') > -1) {
        tLeft = '50%';
        tMarginLeft = (- tooltipW / 2) + 'px';
        if ((' '+direction+' ').indexOf(' top ') > -1) {
          tTop = (- tooltipH - 8) + 'px'; // 8 = 6(arrow width) + 2
        } else {
          tTop = (thisH + 8) + 'px';
        }
      } else {
        tTop = '50%';
        tMarginTop = (- tooltipH / 2) + 'px';
        if ((' '+direction+' ').indexOf(' left ') > -1) {
          tLeft = (- tooltipW - 8) + 'px';
        } else {
          tLeft = (thisW + 8) + 'px';
        }
      }
      tooltip.css({
        'left': tLeft,
        'top': tTop,
        'margin-left': tMarginLeft,
        'margin-top': tMarginTop
      }).addClass('tooltip-show');
    }
  }).mouseout(function(e) {
    // remove tooltip
    k(this).find('[am-tooltip]').remove();
  });

});
