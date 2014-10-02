// @codekit-prepend "lib/function.js"

// show sidebar
document.ready(function () {
	var menu = wl.get('[am-menu]');
	for (var i = 0; i < menu.length; i++) {
		menu[i].onclick = function () {
			var data = this.getAttribute('data');
			// if (data.length !== 0) {
				if (data.indexOf('move') !== -1) {
					wl.get('[am-sidebar]').toggleClass('sidebar-move');
				} else if (data.indexOf('translate') !== -1){
					wl.get('body').toggleClass(data);
				} else if (data.indexOf('reveal') !== -1){
					wl.get('[am-upper]').toggleClass(data);
				}
			// }
			return false;
		};
	}
	
	wl.get('[am-menu-close]').on('click', function () {
			wl.get('[am-sidebar]').removeClass('sidebar-move');
			return false;
		});
});
