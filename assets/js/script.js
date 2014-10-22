// @codekit-prepend "lib/function.js"

// show sidebar
document.ready(function () {
	var menu = wl.get('[am-menu]');
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
					wl.get('[am-sidebar]').toggleClass('sidebar-move');
				} else if (data.indexOf('translate') !== -1){
					wl.get('body').toggleClass(data);
					menuAddClass(this, 'am-menu-active');
				} else if (data.indexOf('reveal') !== -1){
					wl.get('[am-upper]').toggleClass(data);
					menuAddClass(this, 'am-menu-active');
				}
			return false;
		};
	}
	wl.get('[am-menu-close]').on('click', function () {
			wl.get('[am-sidebar]').removeClass('sidebar-move');
			return false;
		});
});
