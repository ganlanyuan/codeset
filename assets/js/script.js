// @codekit-prepend "lib/function.js"

// show sidebar
document.ready(function () {
	var menu = $kit('[am-menu]');
	function menuAddClass (obj, c) {
		if (obj.className.indexOf(c) === -1) {
			obj.className += ' ' + c;
		} else {
			var pattern = new RegExp("\\b" + c + "\\b\\s*", "g");
			obj.className = obj.className.replace(pattern, "");
		}
	}
	for (var i = 0; i < menu.length; i++) {
		menu[i].onclick = function () {
			var data = this.getAttribute('data');
				if (data.indexOf('move') !== -1) {
					$kit('[am-sidebar]').toggleClass('sidebar-move');
				} else if (data.indexOf('translate') !== -1){
					$kit('body').toggleClass(data);
					menuAddClass(this, 'am-menu-active');
				} else if (data.indexOf('reveal') !== -1){
					$kit('[am-upper]').toggleClass(data);
					menuAddClass(this, 'am-menu-active');
				}
			return false;
		};
	}
	$kit('[am-menu-close]').on('click', function () {
			$kit('[am-sidebar]').removeClass('sidebar-move');
			return false;
		});
});
// hide mobile menu on desktop
document.ready(function () {
	window.onresize = function () {
		var winW = $kit.win.W();
		if (winW > 1023) {
			$kit('[am-sidebar~="left"]').removeClass('sidebar-move');
			$kit('[am-sidebar~="right"]').removeClass('sidebar-move');
			$kit('body').removeClass('translate-left');
			$kit('[am-upper]').removeClass('reveal-left');
			$kit('[am-menu]').removeClass('am-menu-active');
		}
	};
});
