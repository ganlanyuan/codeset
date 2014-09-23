// @codekit-prepend "lib/function.js"

// show sidebar
document.ready(function () {
	var body = document.body;
	var menu = document.querySelector('.menu');
	var menuClose = document.querySelector('.menu-close');
	var sidebar = document.querySelector('.sidebar');
	var upper = document.querySelector('.upper');
	menu.onclick = function () {
		var data = this.getAttribute('data');
		if (data.length !== 0) {
			if (data.indexOf('move') !== -1) {
				var cSidebar = classList(sidebar);
				cSidebar.toggle('move');
			} else if (data.indexOf('translate') !== -1){
				var cBody = classList(body);
				cBody.toggle(data);
			} else if (data.indexOf('reveal') !== -1){
				var cUpper = classList(upper);
				cUpper.toggle(data);
			}
		}
		return false;
	};
	menuClose.onclick = function () {
		var cSidebar = classList(sidebar);
		cSidebar.remove('move');
		return false;
	};
});