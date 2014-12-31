<?php include 'include/head.php'; ?>
<body>
<?php include 'include/mb-nav.php'; ?>
<div class="page">
  <div data-page-cover=""></div>
  <header class="site-header">
    <div class="container">
      <div data-icon-nav class="icon-nav"><span></span></div>
      <h1 class="branding"><a href="">
        <svg width="296px" height="46px" viewBox="0 0 296 46" version="1.1">
          <g id="svg-logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
            <path d="M0.961,22.95 C1.024,37.944 12.364,45.504 23.578,45.441 C32.965,45.441 42.856,40.527 44.494,28.053 L33.406,28.053 C32.209,32.778 28.366,35.172 23.578,35.172 C16.9,35.109 12.616,29.439 12.616,22.95 C12.616,15.642 16.963,10.665 23.578,10.665 C28.303,10.665 31.642,12.681 33.217,17.154 L44.305,17.154 C42.604,5.373 32.713,0.396 23.578,0.396 C12.364,0.396 1.024,7.956 0.961,22.95 L0.961,22.95 Z M95.65,23.013 C95.65,-7.479 50.416,-7.479 50.416,23.013 C50.416,53.568 95.65,53.568 95.65,23.013 L95.65,23.013 Z M62.008,23.013 C62.008,7.137 84.121,7.137 84.121,23.013 C84.121,39.015 62.008,39.015 62.008,23.013 L62.008,23.013 Z M120.787,0.9 L104.155,0.9 L104.155,45 L120.787,45 C149.515,44.874 149.515,1.026 120.787,0.9 L120.787,0.9 Z M115.432,11.169 L120.787,11.169 C134.836,11.169 134.836,34.731 120.787,34.731 L115.432,34.731 L115.432,11.169 Z M178.432,0.9 L150.901,0.9 L150.901,45 L178.999,45 L178.999,34.983 L162.115,34.983 L162.115,27.234 L177.109,27.234 L177.109,17.217 L162.115,17.217 L162.115,10.98 L178.432,10.98 L178.432,0.9 L178.432,0.9 Z M196.513,31.518 L185.614,31.518 C185.362,50.922 221.272,50.418 221.272,31.896 C221.272,20.871 212.704,19.737 203.947,18.792 C199.978,18.351 196.702,17.658 196.954,14.319 C197.332,9.09 209.176,8.586 209.176,14.445 L219.886,14.445 C220.138,-4.581 185.866,-4.581 186.244,14.445 C186.37,24.021 192.67,27.297 202.246,27.99 C206.656,28.242 210.31,28.746 210.31,31.833 C210.31,36.999 196.513,37.125 196.513,31.518 L196.513,31.518 Z M257.056,0.9 L229.525,0.9 L229.525,45 L257.623,45 L257.623,34.983 L240.739,34.983 L240.739,27.234 L255.733,27.234 L255.733,17.217 L240.739,17.217 L240.739,10.98 L257.056,10.98 L257.056,0.9 L257.056,0.9 Z M273.814,10.98 L273.814,45 L284.965,45 L284.965,10.98 L295.738,10.98 L295.738,0.9 L262.978,0.9 L262.978,10.98 L273.814,10.98 Z" id="Codeset-4" fill="#fff"></path>
          </g>
        </svg>
      </a></h1>
      <?php include 'include/site-nav.php'; ?>
    </div>
  </header>
  <div class="container">
    <div class="topic">
      <h2 id="layout">layout</h2>
      <section>
        <h3 id="container">container</h3>
        <p>The container of the content. It usually has a max-width. When screen size is smaller than the max-width, it will has a left and right margin. Container can be set align center, left or right.</p>
        <div class="content">
          <div class="content-main">
            <div class="example" data-margin>
              <div class="example-container cell example-content" data-content>
                <strong>I'm a container.</strong><br>
                max-width: 90%;
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include container {$container, $gutter, $align}
// $container: num | px | em | rem | 3/4 | 90%
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
// $align: center | left | right
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="wrap">wrap</h3>
        <p><code>Wrap</code> is usually used with <code>span</code> when creating columns with fixed width gutters.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-wrap" data-padding><div class="cell" data-content>
                <div class="example-content">
                  <strong>I'm a wrap.</strong><br>
                  margin-left: -15px; <br>
                  margin-right: -15px; <br>
                  letter-spacing: -.34em;    // remove the spacing between inline-block boxes
                </div>
              </div></div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include wrap($columns, $gutter);
// $container: num | px | em | rem | 3/4 | 90%
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="span">span</h3>
        <p><code>Span</code> is used to create columns. Both fixed gutter (px, em, rem) and flexible gutter (%) are acceptable. If you use fixed gutter, you need set the parent element as a <code>wrap</code>. Another option is using <code>span-calc</code>.</p>
        <div class="content">
          <div class="content-main">
            <div class="example example-span" data-margin>
              <div class="example-span-1 cell" data-content>
                <div class="example-content">
                  float: left; <br>
                  width: 62.5%; <br>
                  margin-right: 3.125%; 
                </div>
              </div>
              <div class="example-span-2 cell" data-content>
                <div class="example-content">
                  float: left; <br>
                  width: 34.375%;
                </div>
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include span($column, $columns, $gutter, $float, $pull, $push, $last)
// $column: num
// $columns: num
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
// $float: left | right
// $pull: num
// $push: num
// $last: false | true
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="span-calc">span-calc</h3>
        <p><code>Span-calc</code> is using css-calc to create columns, old browser (e.g. IE8) will not supported.</p>
        <div class="content">
          <div class="content-main">
            <div class="example" data-margin>
              <div class="example-span-calc-1 cell" data-content="">
                <div class="example-content">
                  float: left; <br>
                  width: calc(72.7273% + 0.90909rem - 1.25rem); <br>
                  margin-right: 1.25rem;
                </div>
              </div>
              <div class="example-span-calc-2 cell" data-content="">
                <div class="example-content">
                  float: left; <br>
                  width: calc(27.2727% + 0.34091rem - 1.25rem);
                </div>
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include span-calc($column, $columns, $gutter, $float, $pull, $push, $last)
// $column: num
// $columns: num
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
// $float: left | right
// $pull: num
// $push: num
// $last: false | true
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="span-isolate">span-isolate</h3>
        <p><code>Span-isolate</code> is for creating isolate columns. For example, a fixed 300px aside column and a flexible column.</p>
        <div class="content">
          <div class="content-main">
            <div class="example" data-margin>
              <div class="example-span-isolate-1 cell" data-content>
                <div class="example-content">
                  float: left; <br>
                  width: 200px; <br>
                  margin-right: -100%;
                </div>
              </div>
              <div class="example-span-isolate-2 cell" data-content>
                <div class="example-content">
                  margin-left: 13.75em;
                </div>
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include span-isolate($float, $width, $margin, $last)
// $float: left | right
// $width: px | em | rem
// $margin: left px | right px | left px right px
// $last: false | true
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="gallery">gallery</h3>
        <p><code>Gallery</code> is for creating picture galleries.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <ul class="example-gallery">
                <li data-padding><span class="example-content" data-content>
                  width: 25%; <br>
                  padding: 0.625rem; <br>
                  letter-spacing: normal;
                </span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
                <li data-padding><span data-content></span></li>
              </ul>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include gallery($per-row, $columns, $gutter, $child-tag, $position);
// $per-row: num
// $columns: num
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
// $child-tag: div | span | ...
// $position: center | bottom
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="center">center</h3>
        <p><code>Center</code> is for creating both horizontal and vertical center aligned layout.</p>
        <div class="content">
          <div class="content-main">
            <div class="example example-center cell" data-margin>
              <div data-content>
              <div class="example-content">
                width: 150px; <br>
                padding: 10px;
              </div>
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include center($child-tag, $align)
// $child-tag: div | li | span | ...
// $align: left | center
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="debug">debug</h3>
        <p>Use a <code>debug</code> to check if your content is well aligned.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-debug cell example-content">
                $columns: 12; <br>
                $gutter: 20px;
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include debug($columns, $gutter, $color)
// $columns: num
// $gutter: num | px | em | rem | 1/20 | 5% | 0.1
// $color: rgba | ...
            </code></pre>
          </div>
        </div>
      </section>
    </div>
    <div class="topic">
      <h2 id="addons">addons</h2>
      <section>
        <h3 id="type">type</h3>
        <p><code>Type</code> is a shorthand setting for type.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <h1 class="example-type">This is h1</h1>
              <h2 class="example-type">This is h2</h2>
              <h3 class="example-type">This is h3</h3>
              <h4 class="example-type">This is h4</h4>
              <h5 class="example-type">This is h5</h5>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include type($font-size, $font-weight, $line-height, $margin, $padding);
// font-size: num | px | em | rem | null
// font-weight: normal | bold | num | null
// line-height: num | 18/14 | null
// margin: px | em | null
// padding: px | em | null

h1 { @include type(32px,700,1.1, 0 0 10px 0); }
h2 { @include type(28px); }
h3 { @include type(24px,null,1.3); }
h4 { @include type(20px,normal,1.4, 10px); }
h5 { @include type(16px,null,1.5, 0.5em, 1em); }
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="button">button</h3>
        <p><code>Button</code> is not just for "button". Everything which is an inline-block box can be considered as a button.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-button">
                <button>Submit</button>
                <input type="search" name="" id="">
                <div class="pagination">
                  <a href=""><span class="ic-angle-left"></span></a>
                  <a href="">1</a>
                  <a href="">2</a>
                  <a href="">3</a>
                  <a href="">4</a>
                  <a href=""><span class="ic-angle-right"></span></a>
                </div>
                <ul class="breadcrumb">
                  <li><a href="">Home</a><span class="ic-angle-right"></span></li>
                  <li><a href="">news</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include button(font-size, padding, margin, background-color, border, border-radius);
// font-size: value | null
// padding: value | null
// margin: value | null
// background-color: value | null
// border: value | null
// border-radius: value | null
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="mb-nav">mb-nav</h3>
        <p><code>Mb-nav</code> is for the navigation on mobile.</p>
        <div class="content">
          <div class="content-main">
            <pre><code class="language-markup">
&lt;nav&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;span data-nav-close&gt;close&lt;/span&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item01&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item02&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;span data-icon-haschild&gt;&lt;span class="ic-angle-right"&gt;&lt;/span&gt;&lt;/span&gt;&lt;a href=""&gt;item03&lt;/a&gt;
      &lt;ul data-nav-subnav&gt;
        &lt;li data-nav-back&gt;back&lt;/li&gt;
        &lt;li&gt;&lt;a href=""&gt;sub item02&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=""&gt;sub item03&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=""&gt;sub item04&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item04&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;div class="page"&gt;
  &lt;div data-page-cover=""&gt;&lt;/div&gt;
  &lt;div data-icon-nav&gt;&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
nav { @include mb-nav ($style, $direction, $font-size, $padding, $bg); }
// $style: move | translate | reveal
// $direction: left | right
// $font-size: font-size (nav-item)
// $padding: padding (nav-item)
// $bgc: background-color (nav-item)
.page { @include mb-container($style, $direction); }
// $style: move | translate | reveal
// $direction: left | right
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="dropdown">dropdown</h3>
        <p>There are two ways to show a dropdown menu. If you set as "click", you need add an &lt;span data-dropdown-toggle&gt;&lt;/span&gt; beside your dropdown menu.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-dropdown-1">
                <span>dropdown: hover</span>
                <ul data-dropdown-menu>
                  <li><a href="">item01</a></li>
                  <li><a href="">item02</a></li>
                  <li><a href="">item03</a></li>
                </ul>
              </div>              
              <div class="example-dropdown-2">
                <span>dropdown: click</span>
                <span class="ic-angle-down" data-dropdown-toggle></span>
                <ul data-dropdown-menu>
                  <li><a href="">item01</a></li>
                  <li><a href="">item02</a></li>
                  <li><a href="">item03</a></li>
                </ul>
              </div>              
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include dropdown($bgc, $padding, $border, $border-radius, $shadow, $open);
// $bgc: dropdown menu background-color
// $padding: dropdown menu item padding
// $border: value | null
// $border-radius: value | null
// $shadow: value | null
// $open: hover | click

// If you set $open: click, 
// you need insert &lt;span data-dropdown-toggle&gt;&lt;/span&gt; inside your dropdown tag.
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="tooltip">tooltip</h3>
        <p>This is a pure css tooltip.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-tooltip" data-tooltip="I'm a tooltip! Mouse over me to see my content.">Mouse over me!</div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include tooltip($direction, $color, $radius, $width, $height, $content);
// $direction: top | bottom | left | right
// $color: background-color
// $radius: value | null
// $width: max-width
// $height: (for old browser)
// $content: attr(data-tooltip) | your content

// To make tooltip shows perfect, 
// it's better to set tooltip box as a block element, 
// or give it a width;
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="visibility">visibility</h3>
        <p>A shorthand @mixin for hide elements on some parts of viewport.</p>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-visible-1">Visible on 900px up</div>
              <div class="example-visible-2">visible between 900px and 1000px</div>
              <div class="example-visible-3">visible between 700px and 900px, and 1200px up</div>
              <div class="example-hidden-1">Hidden on 900px up</div>
              <div class="example-hidden-2">Hidden between 900px and 1000px</div>
              <div class="example-hidden-3">Hidden between 700px and 900px, and 1200px up</div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include visible($media, $bp...);
@include hidden($media, $bp...);
// $media: null | screen | print | ...
// $bp: num | px | em | ... (accept maximum 5 values)

// @include visible(null, 500)
// visible on 500px up on all media
// @include hidden(screen, 300, 500, 700)
// hidden between 300px and 500px, and 700px up on screen
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="flex-video">flex-video</h3>
        <div class="content">
          <div class="content-main">
            <div class="example">
              <div class="example-flex-video"><iframe width="560" height="315" src="//www.youtube.com/embed/Rb0UmrCXxVA" frameborder="0" allowfullscreen></iframe></div>
            </div>
          </div>
          <div class="content-aside">
            <pre><code class="language-scss">
@include flex-video($child-tag, $ratio);
// $child-tag: iframe | video | ...
// $ratio: 9/16 | ...
            </code></pre>
          </div>
        </div>
      </section>
      <section>
        <h3 id="icon-font">icon-font</h3>
        <?php include 'include/icon-font.php'; ?>
      </section>
    </div>
    <div class="topic">
      <h2 id="kit">kit.js</h2>
      <p>Kit.js is small Javascript library similar with jQuery. Kit.js works fine on IE8 and up, and on other morden browsers.</p>
      <p>The follow metheds are available: <br><code>on</code>, <code>off</code>, <code>click</code>, <code>mouseover</code>, <code>mouseout</code>, <code>focus</code>, <code>blur</code>, <code>submit</code>, <code>keydown</code>, <code>keyup</code>, <br> <code>find</code>, <code>eq</code>, <code>filter</code>, <code>first</code>, <code>last</code>, <code>parent</code>, <code>parents</code>, <code>children</code>, <code>firstChild</code>, <code>lastChild</code>, <code>siblings</code>, <code>prev</code>, <code>prevAll</code>, <code>next</code>, <code>nextAll</code>, <br> <code>hide</code>, <code>show</code>, <code>fadeIn</code>, <code>remove</code>, <br> <code>text</code>, <code>html</code>, <code>attr</code>, <code>css</code>, <code>addClass</code>, <code>removeClass</code>, <code>toggleClass</code>, <code>hasClass</code>, <br> <code>outerWidth</code>, <code>outerHeight</code>, <code>getTop</code>, <code>getLeft</code>, <code>offset(left top)</code>, <br> <code>before</code>, <code>after</code>, <code>append</code>, <code>prepend</code></p>
      <section>
        <h3>Ready</h3>
        <div class="content">
          <pre><code class="language-javascript">
ready(function () {
  ...
});
          </code></pre>
        </div>
      </section>
      <section>
        <h3>Dom methods</h3>
        <div class="content">
          <pre><code class="language-javascript">
k('.header').parent().addClass('newclass');
k('.button').siblings('p').css({
  'color': 'red',
  'line-height': '1.5'
});
          </code></pre>
        </div>
      </section>
      <section>
        <h3>Event</h3>
        <div class="content">
          <pre><code class="language-javascript">
k('.icon-menu').click(function() {
  k(this).parent().toggleClass('active');
});

k('.news').on('mouseover', function() {
  k(this).css('background-color', 'blue');
});
          </code></pre>
        </div>
      </section>
      <section>
        <h3>Reach</h3>
        <p><code>Reach</code> is a function to check if target element reach the edge of browser.</p>
        <div class="content">
          <pre><code class="language-javascript">
if (k(el).reach('middle',0)) {
  // if target element reach the middle of the browser, do something
}
if (k(el).reach('top',20)) {
  // if target element reach the point which is under the top of the browser 20px, do something
}
if (k(el).reach('bottom',0)) {
  // if target element reach the bottom of the browser, do something
}
          </code></pre>
        </div>
      </section>
      <section>
        <h3>scrollTo</h3>
        <p>Scroll to some point in a given period of time.</p>
        <div class="content">
          <pre><code class="language-javascript">
scrollTo (to,duration);

k('.icon-menu').click(function() {
  scrollTo (0,200); // scroll to top in 200ms
});
          </code></pre>
        </div>
      </section>
      <section>
        <h3>numIncrease</h3>
        <p>Increase numbers in given period of time.</p>
        <div class="content">
          <pre><code class="language-javascript">
numIncrease(element, from, to, duration);

document.onload = function  () {
  numIncrease(k('.follows'), 0, 200000, 400);
};
          </code></pre>
        </div>
      </section>
      <section>
        <h3>animate</h3>
        <div class="content">
          <pre><code class="language-javascript">
animate(el, attr, from, to, duration);
animate(k('.target'), 'left', 0, 20, 400);
          </code></pre>
        </div>
      </section>
    </div>
  </div>
</div>
</body>
</html>