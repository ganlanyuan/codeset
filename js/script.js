
/*
 * Adapt.js licensed under GPL and MIT. 
 * Read more here: http://adapt.960.gs
 */
!function(a,b,c,d){function m(a,b){l.href=e,f=e,h(a,b)}function n(){clearTimeout(g);var c,h,n,o,p,q,a=b.documentElement?b.documentElement.clientWidth:0,r=k,s=k-1;for(e="";r--;)if(c=j[r].split("="),h=c[0],q=c[1]?c[1].replace(/\s/g,""):d,p=h.match("to"),n=p?parseInt(h.split("to")[0],10):parseInt(h,10),o=p?parseInt(h.split("to")[1],10):d,!o&&r===s&&a>n||a>n&&o>=a){q&&(e=i+q);break}f?f!==e&&m(r,a):(m(r,a),i&&(b.head||b.getElementsByTagName("head")[0]).appendChild(l))}function o(){clearTimeout(g),g=setTimeout(n,16)}if(c){var e,f,g,h=c.callback||function(){},i=c.path?c.path:"",j=c.range,k=j.length,l=b.createElement("link");l.rel="stylesheet",l.media="screen",n(),c.dynamic&&(a.addEventListener?a.addEventListener("resize",o,!1):a.attachEvent?a.attachEvent("onresize",o):a.onresize=o)}}(this,this.document,ADAPT_CONFIG);

/* make youtube iframe responsible
 * change "http://www.youtube.com" to your code or remove it
 * change ".iframe-container" to your iframe container class
 */
$(function() {
	var $allVideos = $("iframe[src^='http://www.youtube.com']"),
	$fluidEl = $(".iframe-container");
	$allVideos.each(function() {
		$(this)
			.data('aspectRatio', this.height / this.width)
			.removeAttr('height')
			.removeAttr('width');
	});

	$(window).resize(function() {
		var newWidth = $fluidEl.width();
		$allVideos.each(function() {
			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));
		});
	}).resize();
});

/*!
  hey, [be]Lazy.js - v1.2.1 - 2014.03.23
  A lazy loading and multi-serving image script
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
(function(e){"function"===typeof define&&define.amd?define(e):window.Blazy=e()})(function(){function e(b){if(!document.querySelectorAll){var f=document.createStyleSheet();document.querySelectorAll=function(b,a,e,c,g){g=document.all;a=[];b=b.replace(/\[for\b/gi,"[htmlFor").split(",");for(e=b.length;e--;){f.addRule(b[e],"k:v");for(c=g.length;c--;)g[c].currentStyle.k&&a.push(g[c]);f.removeRule(0)}return a}}k=!0;g=[];a=b||{};a.error=a.error||!1;a.offset=a.offset||100;a.success=a.success||!1;a.selector=a.selector||".b-lazy";a.separator=a.separator||"|";a.container=a.container?document.querySelectorAll(a.container):!1;a.errorClass=a.errorClass||"b-error";a.breakpoints=a.breakpoints||!1;a.successClass=a.successClass||"b-loaded";a.src=p=a.src||"data-src";r=1<window.devicePixelRatio;c=s(t,25);q=s(u,50);u();l(a.breakpoints,function(b){if(b.width>=window.screen.width)return p=b.src,!1});v()}function v(){y(a.selector);k&&(k=!1,a.container&&l(a.container,function(b){m(b,"scroll",c)}),m(window,"scroll",c),m(window,"resize",c),m(window,"resize",q));t()}function t(){for(var b=0;b<h;b++){var f=g[b],d=f.getBoundingClientRect(),c=w+a.offset;if(0<=d.left&&d.right<=x+a.offset&&(0<=d.top&&d.top<=c||d.bottom<=c&&d.bottom>=0-a.offset)||-1!==(" "+f.className+" ").indexOf(" "+a.successClass+" "))e.prototype.load(f),g.splice(b,1),h--,b--}0===h&&e.prototype.destroy()}function z(b){if(0<b.offsetWidth&&0<b.offsetHeight){var f=b.getAttribute(p)||b.getAttribute(a.src);if(f){var f=f.split(a.separator),d=f[r&&1<f.length?1:0],f=new Image;l(a.breakpoints,function(a){b.removeAttribute(a.src)});b.removeAttribute(a.src);f.onerror=function(){a.error&&a.error(b,"invalid");b.className=b.className+" "+a.errorClass};f.onload=function(){"img"===b.nodeName.toLowerCase()?b.src=d:b.style.backgroundImage='url("'+d+'")';b.className=b.className+" "+a.successClass;a.success&&a.success(b)};f.src=d}else a.error&&a.error(b,"missing"),b.className=b.className+" "+a.errorClass}}function y(b){b=document.querySelectorAll(b);for(var a=h=b.length;a--;g.unshift(b[a]));}function u(){w=window.innerHeight||document.documentElement.clientHeight;x=window.innerWidth||document.documentElement.clientWidth}function m(b,a,d){b.attachEvent?b.attachEvent&&b.attachEvent("on"+a,d):b.addEventListener(a,d,!1)}function n(b,a,d){b.detachEvent?b.detachEvent&&b.detachEvent("on"+a,d):b.removeEventListener(a,d,!1)}function l(b,a){if(b&&a)for(var d=b.length,c=0;c<d&&!1!==a(b[c],c);c++);}function s(a,c){var d=0;return function(){var e=+new Date;e-d<c||(d=e,a.apply(g,arguments))}}var p,a,x,w,g,h,r,k,c,q;e.prototype.revalidate=function(){v()};e.prototype.load=function(b){-1===(" "+b.className+" ").indexOf(" "+a.successClass+" ")&&z(b)};e.prototype.destroy=function(){a.container&&l(a.container,function(a){n(a,"scroll",c)});n(window,"scroll",c);n(window,"resize",c);n(window,"resize",q);h=0;g.length=0;k=!0};return e});

jQuery(document).ready(function($) {
	var bLazy = new Blazy({
		// selector: 'img',
		offset: 0
	});
});

// example -------------------------
// <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== data-src="http://images.christianpost.com/full/71993/mike-pence.jpg"alt="alt-text"/>
// <noscript><img src="http://images.christianpost.com/full/71993/mike-pence.jpg" alt="alt-text" /></noscript> 

