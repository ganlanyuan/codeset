// @codekit-prepend "kit/kit.js"
// @codekit-prepend "lib/Modernizr.js"

ready(function () {
	// am-nav-icon
	k('[am-nav-icon]').click(function() {
		var style = k(this).attr('data-style'),
				targetNav = '[am-nav~=' + style + ']';
		if (style === 'move-left' || style === 'move-right') {
			k(targetNav).toggleClass('nav-move-show');
			k('[am-content]').toggleClass('move-show');
		} else if(style === 'translate-left' || style === 'translate-right'){
			k('[am-content]').toggleClass(style);
			k(targetNav).toggleClass(style);
		} else if(style === 'reveal-left' || style === 'reveal-right'){
			k('[am-content]').toggleClass(style);
		} else if(style === 'rotate-left' || style === 'rotate-right'){
			k('[am-content]').toggleClass(style);
			k(targetNav).toggleClass('nav-' + style);
		} else if(style === 'rotate-top' || style === 'rotate-bottom'){
			k(targetNav).toggleClass('nav-' + style);
		} else if(style === 'scale-left' || style === 'scale-right'){
			k('[am-content]').toggleClass(style);
			k(targetNav).toggleClass('nav-' + style);
		}
	});
	var amNavClasses = 'nav-move-show translate-left translate-right rotate-left rotate-right scale-left scale-right nav-rotate-left nav-rotate-right nav-rotate-top nav-rotate-bottom nav-scale-left nav-scale-right';
	var amContentClasses = 'move-show translate-left translate-right reveal-left reveal-right rotate-left rotate-right scale-left scale-right';
	// am-nav-close
	k('[am-nav-close]').click(function() {
		k(this).parents('[am-nav]').removeClass(amNavClasses);
		k('[am-content]').removeClass(amContentClasses);
	});
	k('[am-content-cover]').click(function() {
		k(this).parents('[am-content]').removeClass(amContentClasses);
		k('[am-nav]').removeClass(amNavClasses);
	});
	// on-resize
	window.onresize = function () {
		var winW = k.win.W();
		if (winW > 1023) {
			k('[am-content]').removeClass(amContentClasses);
			k('[am-nav]').removeClass(amNavClasses);
		}
	};
});
