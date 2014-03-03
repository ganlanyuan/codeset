// foundation.offcanvas.lte8.js
jQuery(document).ready(function() {
	$('.lt-ie8 .left-off-canva-menu').css({
		'left': '-250px',
		'height': '100%'
	});
	$('.lt-ie8 .right-off-canva-menu').css({
		'right': '-250px',
		'height': '100%'
	});
	$('.lt-ie8 .left-off-canvas-toggle').click(function() {
		if ( $('.off-vancas-wrap').hasClass('move-right') ) {
			$('.off-canvas-wrap').removeClass('move-right');
		} else {
			$('.off-canvas-wrap').addClass('move-right');
		};
		return false;
	});
	$('.lt-ie8 .right-off-canvas-toggle').click(function() {
		if ( $('.off-vancas-wrap').hasClass('move-left') ) {
			$('.off-canvas-wrap').removeClass('move-left');
		} else {
			$('.off-canvas-wrap').addClass('move-left');
		};
		return false;
	});
	$('.lt-ie8 .exit-off-canvas').click(function() {
		$('.off-canvas-wrap').removeClass('move-left').removeClass('move-right');
	});
});

