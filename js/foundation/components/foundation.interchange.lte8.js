// foundation.interchange.lte8.js
jQuery(document).ready(function() {
	function dataChange () {
		$('.lt-ie9 img[data-interchange]').each(function() {
			var dataSrc = $(this).attr('data-interchange').split(",");
			for (var i = 0; i < dataSrc.length; i++) {
				if ( dataSrc[i].indexOf('default') != -1 || dataSrc[i].indexOf('small') != -1 || dataSrc[i].indexOf('only screen and (min-width: 1px)') != -1 ) {
					if ( $(window).width() >= 1 ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				} else if ( dataSrc[i].indexOf('medium') != -1 || dataSrc[i].indexOf('only screen and (min-width: 641px)') != -1 ) {
					if ( $(window).width() >= 641 ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				} else if ( dataSrc[i].indexOf('large') != -1 || dataSrc[i].indexOf('only screen and (min-width: 1024px)') != -1 ) {
					if ( $(window).width() >= 1024 ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				} else if ( dataSrc[i].indexOf('min-width') != -1 && dataSrc[i].indexOf('px') != -1 && dataSrc[i].indexOf('641px') == -1 && dataSrc[i].indexOf('1024px') == -1 ){
					var minW = parseInt(dataSrc[i].replace(/[^\d]/g,''));
					if ( $(window).width() >= minW ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				} else if ( dataSrc[i].indexOf('min-width') != -1 && dataSrc[i].indexOf('em') != -1 ){
					var baseFont = $('html').css('font-size').replace(/[^\d]/g,'');
					var minW = parseInt(dataSrc[i].replace(/[^\d]/g,'') * baseFont);
					if ( $(window).width() >= minW ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				} else if ( dataSrc[i].indexOf('orientation') != -1 ){
					var width = parseInt(screen.width);
					var height = parseInt(screen.height);
					if ( dataSrc[i].indexOf('landscape') != -1 && width > height) { 
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}	else if( dataSrc[i].indexOf('portrait') != -1 && width < height ) {
						var n = dataSrc[i-1].indexOf('[');
						$(this).attr('src', dataSrc[i-1].substring(n+1));
					}
				}
			};
		});
	};
	dataChange();

	$(window).resize(function() {
		dataChange();
	});
});

