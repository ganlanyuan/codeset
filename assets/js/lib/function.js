// document.ready
(function () {
	var ie = !!(window.attachEvent && !window.opera);
	var wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525);
	var fn = [];
	var run = function () { for (var i = 0; i < fn.length; i++){fn[i]();} };
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
	}else if (wk){
		var t = setInterval(function () {
		if (/^(loaded|complete)$/.test(d.readyState)){
			clearInterval(t), run();
		}
		}, 0);
	}
	};
})();


if (typeof Array.prototype.indexOf !== 'function') {
	Array.prototype.indexOf = function (item) {
		for(var i = 0; i < this.length; i++) {
			if (this[i] === item) {
				return i;
			}
		}
		return -1;
	}; 
}

// $kit start
// (function (window, undefined) {
var $kit = function (selector) {
	if ( window === this ) {return new $kit(selector); }
	if (typeof selector === 'string') {
		var result = document.querySelectorAll(selector);
		if ( result.length > 0 ) {
			for (var i = 0; i < result.length; i++) {
				this[i] = result[i];
			}
			this.length = result.length;
			return this;
		}
	} else if ( typeof selector === 'object' ) {
		this[0] = selector;
		this.length = 1;
		return this;
	}
};

$kit.win = {
	W: function  () {
		var d = document, w = window,
		winW = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth;
		return winW;  
	},

	H: function () {
		var winH, d = document, w = window;
		if(w.innerHeight) { // all except IE
			winH = w.innerHeight;
		} else if (d.documentElement && d.documentElement.clientHeight) {
		// IE 6 Strict Mode
			winH = d.documentElement.clientHeight;
		} else if (d.body) { // other
			winH = d.body.clientHeight;
		}
		return winH;
	},

	ST: function () {
		var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
		return scrollTop;
	}
};

$kit.fn = $kit.prototype = {
	hide: function(fadespeed,fn) {
		for (var i = 0; i < this.length; i++) {
			this[i].style.display = 'none';
		}
		return this;
	},
	show: function(fadespeed,fn) {
		for (var i = 0; i < this.length; i++) {
			this[i].style.display = 'inherit';
		}
		return this;
	},
	// ========= UTILS =========
	map: function (callback) {
		var results = [];
		for (var i = 0; i < this.length; i++) {
			results.push(callback.call(this, this[i], i));
		}
		return results; //.length > 1 ? results : results[0];
	},
	mapOne: function (callback) {
		var m = this.map(callback);
		return m.length > 1 ? m : m[0];
	},
	forEach: function (callback) {
		this.map(callback);
		return this; 
	},

	// ========== DOM MANIPULATION ==========

	// handle DOM
	firstChild: function () {
		var results = [];
		for (var i = 0; i < this.length; i++) {
			if (this[i].firstElementChild) {
				results.push(this[i].firstElementChild);
			} else{
				var node = this[i].firstChild;
				while (node.nodeType !== 1) {
					node = node.nextSibling;
				}
				results.push(node);
			}
		}
		return new $kit(results);
	},

	lastChild: function () {
		var results = [];
		for (var i = 0; i < this.length; i++) {
			if (this[i].lastElementChild) {
				results.push(this[i].lastElementChild);
			} else{
				var node = this[i].lastChild;
				while (node.nodeType !== 1) {
					node = node.previousSibling;
				}
				results.push(node);
			}
		}
		return new $kit(results);
	},

	children: function () {
		var results = [];
		for (var i = 0; i < this.length; i++) {
			if (this[i].children) {
				var children = this[i].children;
				for (var j = 0; j < children.length; j++) {
					results.push(children[j]);
				}
			} else{
				var childNodes = this[i].childNodes;
				for (var j = 0; j < childNodes.length; j++) {
					if (childNodes[j].nodeType === 1) {
						results.push(childNodes[j]);
					}
				}
			}
		}
		return new $kit(results);
	},

	parent: function () {
		var results = [];
		for (var i = 0; i < this.length; i++) {
			results.push(this[i].parentNode);
		}
		return new $kit(results);
	},

	siblings: function () {
		var results = [];
		var allSiblings = this.parent().children();
		for (var i = 0; i < allSiblings.length; i++) {
			if (allSiblings[i] !== this[0]) {
				results.push(allSiblings[i]);
			}
		}
		return new $kit(results);
	},

	// handle attr
	text: function (text) {
		if (typeof text !== "undefined") {
			return this.forEach(function (el) {
				if (el.textContent) {
					el.textContent = text;
				} else{
					el.innerText = text;
				}
			});
		} else {
			return this.mapOne(function (el) {
				if (el.textContent) {
					return el.textContent;
				} else{
					return el.innerText;
				}
			});
		}
	},

	html: function (html) {
		if (typeof html !== "undefined") {
			return this.forEach(function (el) {
				el.innerHTML = html;
			});
		} else {
			return this.mapOne(function (el) {
				return el.innerHTML;
			});
		}
	},

	attr: function (attr, val) {
		if (typeof val !== 'undefined') {
			return this.forEach(function(el) {
				el.setAttribute(attr, val);
			});
		} else {
			return this.mapOne(function (el) {
				return el.getAttribute(attr);
			});
		}
	},

	// handle class
	hasClass: function (c) {
		for (var i = 0; i < this.length; i++) {
			var classes = this[i].className;
			if (!classes) {return false; }
			if (classes === c) {return true;} 
			return classes.search("\\b" + c + "\\b") !== -1;
		}
	},

	addClass: function (c) {
		var className = "";
		function addClassCheck (obj,cla) {
			if (obj.className.indexOf(cla) === -1) {
				className += ' ' + cla;
			}
			return className;
		}
		return this.forEach(function (el) {
			if (c.indexOf(' ') !== -1) {
				var cs = c.split(' ');
				for (var i = 0; i < cs.length; i++) {
					addClassCheck(el,cs[i]);
				}
			} else {
				addClassCheck(el,c);
			}
			el.className += className;
		});
	},

	removeClass: function (c) {
		function removeClassCheck (obj, cla) {
			var pattern = new RegExp("\\b" + cla + "\\b\\s*", "g");
			obj.className = obj.className.replace(pattern, "");
		}
		return this.forEach(function (el) {
			if (c.indexOf(' ') !== -1) {
				var cs = c.split(' ');
				for (var i = 0; i < cs.length; i++) {
					removeClassCheck(el,cs[i]);
				};
			} else{
				removeClassCheck(el,c);
			}
		});
	},

	toggleClass: function (c) {
		function toggleClassCheck (obj, cla) {
			if (obj.hasClass(cla)) {
				obj.removeClass(cla);
			} else{
				obj.addClass(cla);
			}
		}
		if (c.indexOf(' ') !== -1) {
			var cs = c.split(' ');
			for (var i = 0; i < cs.length; i++) {
				toggleClassCheck(this, cs[i]);
			};
		} else{
			toggleClassCheck(this, c);
		}
	},

	// handle node
	append: function (els) {
		return this.forEach(function (parEl, i) {
			els.forEach(function (childEl) {
				parEl.appendChild( (i > 0) ? childEl.cloneNode(true) : childEl);
			});
		});
	},

	prepend: function (els) {
		return this.forEach(function (parEl, i) {
			for (var j = els.length -1; j > -1; j--) {
				parEl.insertBefore((i > 0) ? els[j].cloneNode(true) : els[j], parEl.firstChild);
			}
		});
	},

	remove: function () {
		return this.forEach(function (el) {
			return el.parentNode.removeChild(el);
		});
	},

	// get element size
	getWidth: function () {
		return this.mapOne(function (el) {
			var box = el.getBoundingClientRect();
			var ow = box.width || (box.right - box.left);
			return ow;
		});
	},

	getHeight: function () {
		return this.mapOne(function (el) {
			var box = el.getBoundingClientRect();
			var oh = box.height || (box.bottom - box.top);
			return oh;
		});
	},

	getTop: function () {
		return this.mapOne(function (el) {
			var actualTop = el.offsetTop, current = el.offsetParent;
			while (current !== null){
			actualTop += current.offsetTop;
			current = current.offsetParent;
			}
			return actualTop;
		});
	},

	getLeft: function () {
		return this.mapOne(function (el) {
			var actualLeft = el.offsetLeft, current = el.offsetParent;
			while (current !== null){
			actualLeft += current.offsetLeft;
			current = current.offsetParent;
			}
			return actualLeft;
		});
	},

	on: (function () {
		if (document.addEventListener) {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el.addEventListener(evt, fn, false);
				});
			};
		} else if (document.attachEvent)  {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el.attachEvent("on" + evt, fn);
				});
			};
		} else {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el["on" + evt] = fn;
				});
			};
		}
	}()),

	off: (function () {
		if (document.removeEventListener) {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el.removeEventListener(evt, fn, false);
				});
			};
		} else if (document.detachEvent)  {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el.detachEvent("on" + evt, fn);
				});
			};
		} else {
			return function (evt, fn) {
				return this.forEach(function (el) {
					el["on" + evt] = null;
				});
			};
		}
	}()),

	create: function (tagName, attrs) {
		var el = new $kit([document.createElement(tagName)]);
		if (attrs) {
			if (attrs.className) { 
				el.addClass(attrs.className);
				delete attrs.className;
			}
			if (attrs.text) { 
				el.text(attrs.text);
				delete attrs.text;
			}
			for (var key in attrs) {
				if (attrs.hasOwnProperty(key)) {
					el.attr(key, attrs[key]);
				}
			}
		}
		return el;
	}

};

// 	window.$kit = $kit;
// })(window);
// $kit end


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
 * Build: http://modernizr.com/download/#-boxshadow-flexbox-multiplebgs-opacity-cssanimations-cssgradients-csstransforms-csstransforms3d-csstransitions-inlinesvg-svg-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-css_calc
 */
;window.Modernizr=function(a,b,c){function B(a){j.cssText=a}function C(a,b){return B(m.join(a+";")+(b||""))}function D(a,b){return typeof a===b}function E(a,b){return!!~(""+a).indexOf(b)}function F(a,b){for(var d in a){var e=a[d];if(!E(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function G(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:D(f,"function")?f.bind(d||b):f}return!1}function H(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return D(b,"string")||D(b,"undefined")?F(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),G(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={svg:"http://www.w3.org/2000/svg"},r={},s={},t={},u=[],v=u.slice,w,x=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},y=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=D(e[d],"function"),D(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),z={}.hasOwnProperty,A;!D(z,"undefined")&&!D(z.call,"undefined")?A=function(a,b){return z.call(a,b)}:A=function(a,b){return b in a&&D(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=v.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(v.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(v.call(arguments)))};return e}),r.flexbox=function(){return H("flexWrap")},r.multiplebgs=function(){return B("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},r.boxshadow=function(){return H("boxShadow")},r.opacity=function(){return C("opacity:.55"),/^0.55$/.test(j.opacity)},r.cssanimations=function(){return H("animationName")},r.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return B((a+"-webkit- ".split(" ").join(b+a)+m.join(c+a)).slice(0,-a.length)),E(j.backgroundImage,"gradient")},r.csstransforms=function(){return!!H("transform")},r.csstransforms3d=function(){var a=!!H("perspective");return a&&"webkitPerspective"in g.style&&x("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},r.csstransitions=function(){return H("transition")},r.svg=function(){return!!b.createElementNS&&!!b.createElementNS(q.svg,"svg").createSVGRect},r.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==q.svg};for(var I in r)A(r,I)&&(w=I.toLowerCase(),e[w]=r[I](),u.push((e[w]?"":"no-")+w));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)A(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},B(""),i=k=null,e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.hasEvent=y,e.testProp=function(a){return F([a])},e.testAllProps=H,e.testStyles=x,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+u.join(" "):""),e}(this,this.document),Modernizr.addTest("csscalc",function(){var a="width:",b="calc(10px);",c=document.createElement("div");return c.style.cssText=a+Modernizr._prefixes.join(b+a),!!c.style.length});
