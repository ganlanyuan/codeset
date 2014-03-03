// foundation.reveal.ie7.js
jQuery(document).ready(function($) {
	$('.lt-ie8 [data-reveal-id]').click(function() {
		var Id = $(this).attr('data-reveal-id');
		for (var i = 0; i < $('[data-reveal]').length; i++) {
			if ( $('[data-reveal]').eq(i).attr('id') == Id ) {
				$('[data-reveal]').eq(i).show().css({'visibility': 'visible','top': '100px'}).wrap( "<div class='reveal-modal-bg'></div>" );
				$('.reveal-modal-bg').css('z-index', '9999').show();
			};
		};
		return false;
	});
	$('.lt-ie8 .close-reveal-modal').click(function() {
		$(this).parents('[data-reveal]').unwrap("<div class='reveal-modal-bg'></div>").hide();
	});
});