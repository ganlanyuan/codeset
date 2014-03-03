// foundation.equalizer.lte8.js
jQuery(document).ready(function() {
	function equalizer () {
		var Height = new Array();
		var $items = $('.lt-ie9 [data-equalizer] > [data-equalizer-watch]');
		Array.prototype.max = function(){ 
			return Math.max.apply({},this);
		}
		for (var i = 0; i < $items.length; i++) {
				$items.eq(i).height('auto');
				var $thisHeight = $items.eq(i).height();
				Height.push($thisHeight);
		};
		
		if ( $(window).width() > 1024 ) {
			$items.height(Height.max());
		};
	}
	equalizer();

	$(window).resize(function() {
		equalizer();
	});
});

