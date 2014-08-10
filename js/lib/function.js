/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-flexboxlegacy-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-inlinesvg-touch-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-css_calc
 */
;window.Modernizr=function(a,b,c){function C(a){j.cssText=a}function D(a,b){return C(n.join(a+";")+(b||""))}function E(a,b){return typeof a===b}function F(a,b){return!!~(""+a).indexOf(b)}function G(a,b){for(var d in a){var e=a[d];if(!F(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function H(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:E(f,"function")?f.bind(d||b):f}return!1}function I(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return E(b,"string")||E(b,"undefined")?G(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),H(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"http://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=E(e[d],"function"),E(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),A={}.hasOwnProperty,B;!E(A,"undefined")&&!E(A.call,"undefined")?B=function(a,b){return A.call(a,b)}:B=function(a,b){return b in a&&E(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.flexbox=function(){return I("flexWrap")},s.flexboxlegacy=function(){return I("boxDirection")},s.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:y(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},s.rgba=function(){return C("background-color:rgba(150,255,150,.5)"),F(j.backgroundColor,"rgba")},s.hsla=function(){return C("background-color:hsla(120,40%,100%,.5)"),F(j.backgroundColor,"rgba")||F(j.backgroundColor,"hsla")},s.multiplebgs=function(){return C("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},s.backgroundsize=function(){return I("backgroundSize")},s.borderimage=function(){return I("borderImage")},s.borderradius=function(){return I("borderRadius")},s.boxshadow=function(){return I("boxShadow")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return D("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return I("animationName")},s.csscolumns=function(){return I("columnCount")},s.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return C((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),F(j.backgroundImage,"gradient")},s.cssreflections=function(){return I("boxReflect")},s.csstransforms=function(){return!!I("transform")},s.csstransforms3d=function(){var a=!!I("perspective");return a&&"webkitPerspective"in g.style&&y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},s.csstransitions=function(){return I("transition")},s.fontface=function(){var a;return y('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},s.generatedcontent=function(){var a;return y(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},s.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==r.svg};for(var J in s)B(s,J)&&(x=J.toLowerCase(),e[x]=s[J](),v.push((e[x]?"":"no-")+x));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)B(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},C(""),i=k=null,e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.hasEvent=z,e.testProp=function(a){return G([a])},e.testAllProps=I,e.testStyles=y,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),Modernizr.addTest("csscalc",function(){var a="width:",b="calc(10px);",c=document.createElement("div");return c.style.cssText=a+Modernizr._prefixes.join(b+a),!!c.style.length});

/* Lazy Load XT 1.0.2 | MIT License | jquery.lazyloadxt.min.js */
!function(a,b,c,d){function e(a,b){return a[b]===d?s[b]:a[b]}function f(a,b){var c=s["on"+a];c&&(v(c)?c.call(b[0]):b.addClass(c.addClass||"").removeClass(c.removeClass||"")),b.trigger("lazy"+a,[b]),j()}function g(b){f(b.type,a(this).off(o,g))}function h(c){if(y.length){c=c||s.forceLoad,z=1/0;var d,e,h=u.scrollTop(),i=b.innerHeight||u.height(),j=b.innerWidth||u.width();for(d=0,e=y.length;e>d;d++){var k,l=y[d],n=l[0],p=l[m],r=!1,t=c;if(a.contains(q,n)){if(c||!p.visibleOnly||n.offsetWidth||n.offsetHeight){if(!t){var w=n.getBoundingClientRect(),x=p.edgeX,A=p.edgeY;k=w.top+h-A-i,t=h>=k&&w.bottom>-A&&w.left<=j+x&&w.right>-x}if(t){f("show",l);var B=p.srcAttr,C=v(B)?B(l):n.getAttribute(B);C&&(l.on(o,g),n.src=C),r=!0}else z>k&&(z=k)}}else r=!0;r&&(y.splice(d--,1),e--)}e||f("complete",a(q))}}function i(){A>1?(A=1,h(),setTimeout(i,s.throttle)):A=0}function j(a){y.length&&(a&&"scroll"===a.type&&a.currentTarget===b&&z>=u.scrollTop()||(A||setTimeout(i,0),A=2))}function k(){u.lazyLoadXT()}function l(){h(!0)}var m="lazyLoadXT",n="lazied",o="load error",p="lazy-hidden",q=c.documentElement||c.body,r=b.onscroll===d||!!b.operamini||!q.getBoundingClientRect,s={autoInit:!0,selector:"img[data-src]",blankImage:"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",throttle:99,forceLoad:r,loadEvent:"pageshow",updateEvent:"load orientationchange resize scroll touchmove",forceEvent:"",oninit:{removeClass:"lazy"},onshow:{addClass:p},onload:{removeClass:p,addClass:"lazy-loaded"},onerror:{removeClass:p},checkDuplicates:!0},t={srcAttr:"data-src",edgeX:0,edgeY:0,visibleOnly:!0},u=a(b),v=a.isFunction,w=a.extend,x=a.data||function(b,c){return a(b).data(c)},y=[],z=0,A=0;a[m]=w(s,t,a[m]),a.fn[m]=function(c){c=c||{};var d,g=e(c,"blankImage"),h=e(c,"checkDuplicates"),i=e(c,"scrollContainer"),k={};a(i).on("scroll",j);for(d in t)k[d]=e(c,d);return this.each(function(){if(this===b)a(s.selector).lazyLoadXT(c);else{if(h&&x(this,n))return;var d=a(this).data(n,1);g&&"IMG"===d[0].tagName&&!this.src&&(this.src=g),d[m]=w({},k),f("init",d),y.push(d)}})},a(c).ready(function(){f("start",u),u.on(s.loadEvent,k).on(s.updateEvent,j).on(s.forceEvent,l),a(c).on(s.updateEvent,j),s.autoInit&&k()})}(window.jQuery||window.Zepto,window,document);

/*
<img class="lazy" data-src="lazy.jpg" width="100" height="100">
<noscript><img src="lazy.jpg" width="100" height="100"></noscript>
*/


// document.ready
(function () {
	var ie = !!(window.attachEvent && !window.opera);
	var wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525);
	var fn = [];
	var run = function () { for (var i = 0; i < fn.length; i++) {fn[i]();} };
	var d = document;
	d.ready = function (f) {
		if (!ie && !wk && d.addEventListener){
			return d.addEventListener('DOMContentLoaded', f, false);
		}
		if (fn.push(f) > 1) {return;}
		if (ie){
			(function () {
				try { d.documentElement.doScroll('left'); run(); }
				catch (err) { setTimeout(arguments.callee, 0); }
			})();
		} else if (wk){
			var t = setInterval(function () {
				if (/^(loaded|complete)$/.test(d.readyState)){
					clearInterval(t), run();
				}
			}, 0);
		}
	};
})();

// get window height
function getWindowHeight () {
	var wh, d = document, w = window;
	if (w.innerWidth !== null) {
		wh = w.innerHeight;
	} else if(d.compatMode === 'CSS1Compat'){
		wh = d.documentElement.clientHeight;
	} else {
		wh = d.body.clientHeight;
	} 
	return wh;
}

// get window width
function getWindowWidth () {
	var d = document, w = window, e = d.documentElement, b = d.querySelector('body'), x = w.innerWidth || e.clientWidth || b.clientWidth;
	return x;
}

// get element size
function getElementWidth (myObject) {
	var box = myObject.getBoundingClientRect();
	var obw = box.width || (box.right - box.left);
	return obw;
}
function getElementHeight (myObject) {
	var box = myObject.getBoundingClientRect();
	var obh = box.height || (box.bottom - box.top);
	return obh;
}

// get element absolute position
function getElementTop(element){
	var actualTop = element.offsetTop;
	var current = element.offsetParent;
	while (current !== null){
		actualTop += current.offsetTop;
		current = current.offsetParent;
	}
	return actualTop;
}
function getElementLeft(element){
	var actualLeft = element.offsetLeft;
	var current = element.offsetParent;
	while (current !== null){
		actualLeft += current.offsetLeft;
		current = current.offsetParent;
	}
	return actualLeft;
}
// get document scroll top
function getDocumentScrollTop () {
	var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	return scrollTop;
}

// classList(Object)   [= Object.classList]
function classList(e) {
  if (e.classList) {return e.classList;} 
  else {return new CSSClassList(e);} 
}
function CSSClassList(e) { this.e = e; }
CSSClassList.prototype.contains = function(c) { 
  if (c.length === 0 || c.indexOf(" ") != -1) {
    throw new Error("Invalid class name: '" + c + "'");
  }
  var classes = this.e.className;
  if (!classes) {return false; }
  if (classes === c) {return true;} 
  return classes.search("\\b" + c + "\\b") != -1;
};
CSSClassList.prototype.add = function(c) {
  if (this.contains(c)) {return}; 
  var classes = this.e.className;
  if (!classes){
  	this.e.className = c;
  } else {
    c = " " + c; 
    this.e.className += c;
  } 
};
CSSClassList.prototype.remove = function(c) {
  if (c.length === 0 || c.indexOf(" ") != -1){
      throw new Error("Invalid class name: '" + c + "'");}
  var pattern = new RegExp("\\s*\\b" + c + "\\b", "g");
  this.e.className = this.e.className.replace(pattern, "");
};
CSSClassList.prototype.toggle = function(c) {
  if (this.contains(c)) { 
    this.remove(c); 
    return false;
  }
  else { 
    this.add(c); 
    return true;
  }
};
CSSClassList.prototype.toString = function() { return this.e.className; };
CSSClassList.prototype.toArray = function() {
  return this.e.className.match(/\b\w+\b/g) || [];
};

// scroll to
function scrollTo(element, to, duration) {
	if (duration < 0) {return;}
	var difference = to - element.scrollTop;
	var perTick = difference / duration * 10;

	setTimeout(function() {
		element.scrollTop = element.scrollTop + perTick;
		if (element.scrollTop === to) {return;}
		scrollTo(element, to, duration - 10);
	}, 10);
}
