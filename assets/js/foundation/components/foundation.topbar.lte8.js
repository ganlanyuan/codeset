// foundation.topbar.lte8.js
jQuery(document).ready(function($) {
	// toggle-topbar menu-icon
	$('.lt-ie9 .menu-icon').click(function() {
		var $topBar = $(this).parents('.top-bar');
		if ( $topBar.hasClass('expanded') ) {
			$topBar.removeClass('expanded');
		} else{
			$topBar.addClass('expanded');
		};
		return false;
	});

	// is_hover: false
	$('.lt-ie9 .top-bar .has-dropdown').click(function() {
		var $dropdown = $(this).find('.dropdown:first');
		if ( $(window).width() >= 641 ) {
			if ( $dropdown.is(":hidden") ) {
				$dropdown.show();
			} else{
				$dropdown.hide();
			};
		} else {
			$(this).addClass('moved');
			var left = - ($(this).parents('.has-dropdown').length + 1) * 100 +'%';
			var height = $('.title-area').outerHeight() + $('.top-bar-section').outerHeight();
			$('.top-bar-section').css({'left': left, 'height': height});
			return false;
		};
		return false;
	});

	// back
	$('.lt-ie9 .title.back').click(function() {
		var left = - ($(this).parents('.has-dropdown').length - 1) * 100 +'%';
		var height = $('.title-area').outerHeight() + $('.top-bar-section').outerHeight();
		$('.top-bar-section').css({'left': left, 'height': height});
		$(this).parent().parent().removeClass('moved');
		return false;
	});
});

