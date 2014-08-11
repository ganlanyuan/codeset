// document.ready
(function () {var ie = !!(window.attachEvent && !window.opera); var wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525); var fn = []; var run = function () { for (var i = 0; i < fn.length; i++) {fn[i]();} }; var d = document; d.ready = function (f) {if (!ie && !wk && d.addEventListener){return d.addEventListener('DOMContentLoaded', f, false); } if (fn.push(f) > 1) {return;} if (ie){(function () {try { d.documentElement.doScroll('left'); run(); } catch (err) { setTimeout(arguments.callee, 0); } })(); } else if (wk){var t = setInterval(function () {if (/^(loaded|complete)$/.test(d.readyState)){clearInterval(t), run(); } }, 0); } }; })();

// get window width, height, scrolltop
// var a = new MyWindow(); a.getWidth || getHeight || getScrollTop
var MyWindow = function () {};
MyWindow.prototype.getWidth = function  () {
	var d = document, w = window, e = d.documentElement, b = d.querySelector('body'), ww = w.innerWidth || e.clientWidth || b.clientWidth;
	return ww;	
};
MyWindow.prototype.getHeight = function () {
	var wh, d = document, w = window;
	if (w.innerWidth !== null) { wh = w.innerHeight; } 
	else if(d.compatMode === 'CSS1Compat'){ wh = d.documentElement.clientHeight;
	} 
	else { wh = d.body.clientHeight; }
	return wh;
};
MyWindow.prototype.getScrollTop = function () {
	var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	return scrollTop;
}

// get element width, height, actual top, actual left
// var a = new Element(Object); a.getWidth
var Element = function (myObject) {
	this.o = myObject;
	this.box = this.o.getBoundingClientRect();
};
Element.prototype.getWidth = function () {
	var ow = this.box.width || (this.box.right - this.box.left);
	return ow;
};
Element.prototype.getHeight = function () {
	var oh = this.box.height || (this.box.bottom - this.box.top);
	return oh;
};
Element.prototype.getTop = function () {
	var actualTop = this.o.offsetTop, current = this.o.offsetParent;
	while (current !== null){
		actualTop += current.offsetTop;
		current = current.offsetParent;
	}
	return actualTop;
};
Element.prototype.getLeft = function () {
	var actualLeft = this.o.offsetLeft, current = this.o.offsetParent;
	while (current !== null){
		actualLeft += current.offsetLeft;
		current = current.offsetParent;
	}
	return actualLeft;
};


// classList(Object)   [= Object.classList]
// var a = classList(Object); a.add('class');
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

/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-flexboxlegacy-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-inlinesvg-touch-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-css_calc
 */
;window.Modernizr=function(a,b,c){function C(a){j.cssText=a}function D(a,b){return C(n.join(a+";")+(b||""))}function E(a,b){return typeof a===b}function F(a,b){return!!~(""+a).indexOf(b)}function G(a,b){for(var d in a){var e=a[d];if(!F(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function H(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:E(f,"function")?f.bind(d||b):f}return!1}function I(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return E(b,"string")||E(b,"undefined")?G(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),H(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"http://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=E(e[d],"function"),E(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),A={}.hasOwnProperty,B;!E(A,"undefined")&&!E(A.call,"undefined")?B=function(a,b){return A.call(a,b)}:B=function(a,b){return b in a&&E(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.flexbox=function(){return I("flexWrap")},s.flexboxlegacy=function(){return I("boxDirection")},s.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:y(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},s.rgba=function(){return C("background-color:rgba(150,255,150,.5)"),F(j.backgroundColor,"rgba")},s.hsla=function(){return C("background-color:hsla(120,40%,100%,.5)"),F(j.backgroundColor,"rgba")||F(j.backgroundColor,"hsla")},s.multiplebgs=function(){return C("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},s.backgroundsize=function(){return I("backgroundSize")},s.borderimage=function(){return I("borderImage")},s.borderradius=function(){return I("borderRadius")},s.boxshadow=function(){return I("boxShadow")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return D("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return I("animationName")},s.csscolumns=function(){return I("columnCount")},s.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return C((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),F(j.backgroundImage,"gradient")},s.cssreflections=function(){return I("boxReflect")},s.csstransforms=function(){return!!I("transform")},s.csstransforms3d=function(){var a=!!I("perspective");return a&&"webkitPerspective"in g.style&&y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},s.csstransitions=function(){return I("transition")},s.fontface=function(){var a;return y('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},s.generatedcontent=function(){var a;return y(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},s.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==r.svg};for(var J in s)B(s,J)&&(x=J.toLowerCase(),e[x]=s[J](),v.push((e[x]?"":"no-")+x));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)B(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},C(""),i=k=null,e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.hasEvent=z,e.testProp=function(a){return G([a])},e.testAllProps=I,e.testStyles=y,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),Modernizr.addTest("csscalc",function(){var a="width:",b="calc(10px);",c=document.createElement("div");return c.style.cssText=a+Modernizr._prefixes.join(b+a),!!c.style.length});
