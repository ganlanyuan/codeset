// @codekit-prepend "lib/kit.js"
// @codekit-prepend "lib/Modernizr.js"

ready(function () {
	// am-nav-icon
	kit('[am-nav-icon]').click(function() {
		var style = kit(this).attr('data-style'),
				targetNav = '[am-nav~=' + style + ']';
		if (style === 'move-left' || style === 'move-right') {
			kit(targetNav).toggleClass('nav-move-show');
			kit('[am-content]').toggleClass('move-show');
		} else if(style === 'translate-left' || style === 'translate-right'){
			kit('[am-content]').toggleClass(style);
			kit(targetNav).toggleClass(style);
		} else if(style === 'reveal-left' || style === 'reveal-right'){
			kit('[am-content]').toggleClass(style);
		} else if(style === 'rotate-left' || style === 'rotate-right'){
			kit('[am-content]').toggleClass(style);
			kit(targetNav).toggleClass('nav-' + style);
		} else if(style === 'rotate-top' || style === 'rotate-bottom'){
			kit(targetNav).toggleClass('nav-' + style);
		} else if(style === 'scale-left' || style === 'scale-right'){
			kit('[am-content]').toggleClass(style);
			kit(targetNav).toggleClass('nav-' + style);
		}
	});
	// am-nav-icon styled
	kit('[am-nav-icon~="styled"]').click(function() {
		kit(this).toggleClass('am-nav-icon-active');
	});
	// am-nav-close
	var amNavClasses = 'nav-move-show translate-left translate-right rotate-left rotate-right scale-left scale-right nav-rotate-left nav-rotate-right nav-rotate-top nav-rotate-bottom nav-scale-left nav-scale-right';
	var amContentClasses = 'move-show translate-left translate-right reveal-left reveal-right rotate-left rotate-right scale-left scale-right';
	kit('[am-nav-close]').click(function() {
		kit(this).parents('[am-nav]').removeClass(amNavClasses);
		kit('[am-content]').removeClass(amContentClasses);
	});
	kit('[am-content-cover]').click(function() {
		kit(this).parents('[am-content]').removeClass(amContentClasses);
		kit('[am-nav]').removeClass(amNavClasses);
	});
	// on-resize
	window.onresize = function () {
		var winW = kit.win.W();
		if (winW > 1023) {
			kit('[am-content]').removeClass(amContentClasses);
			kit('[am-nav]').removeClass(amNavClasses);
		}
	};
});
