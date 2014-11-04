// @codekit-prepend "lib/kit.js"

// show sidebar
ready(function () {
	function menuAddClass (obj, c) {
		if (obj.className.indexOf(c) === -1) {
			obj.className += ' ' + c;
		} else {
			var pattern = new RegExp("\\b" + c + "\\b\\s*", "g");
			obj.className = obj.className.replace(pattern, "");
		}
	}
	kit('[am-menu]').click(function() {
		var data = this.getAttribute('data');
		if (data.indexOf('move') !== -1) {
			kit('[am-sidebar]').toggleClass('sidebar-move');
		} else if (data.indexOf('translate') !== -1){
			kit('body').toggleClass(data);
			menuAddClass(this, 'am-menu-active');
		} else if (data.indexOf('reveal') !== -1){
			kit('[am-upper]').toggleClass(data);
			menuAddClass(this, 'am-menu-active');
		}
		return false;
	});
	kit('[am-menu-close]').click(function () {
			kit('[am-sidebar]').removeClass('sidebar-move');
			return false;
		});
});
// hide mobile menu on desktop
ready(function () {
	window.onresize = function () {
		var winW = kit.win.W();
		if (winW > 1023) {
			kit('[am-sidebar~="left"]').removeClass('sidebar-move');
			kit('[am-sidebar~="right"]').removeClass('sidebar-move');
			kit('body').removeClass('translate-left');
			kit('[am-upper]').removeClass('reveal-left');
			kit('[am-menu]').removeClass('am-menu-active');
		}
	};
});
