<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Responsive Grids Tests</title>
	<?php include 'css.php'; ?>
</head>
<body>
<div am-row="no-gutter full" class="topbar">
	<div am-col class="topbar-col active"><a href="grid.php">grid</a></div>
	<div am-col class="topbar-col"><a href="button.php">button</a></div>
	<div am-col class="topbar-col"><a href="form.php">form</a></div>
	<div am-col class="topbar-col"><a href="visibility.php">visibility</a></div>
	<div am-col class="topbar-col"><a href="module.php">module</a></div>
	<div am-col class="topbar-col"><a href="icon-font.php">icon-font</a></div>
</div>
<div class="test-wrap">
	<div am-col-aside="" class="fixed-sidebar">
		<ul>
			<li><a href="#t1">Base Grid</a></li>
			<li><a href="#t2">Responsive Grid</a></li>
			<li><a href="#t3">Nested Grids</a></li>
			<li><a href="#t4">Block Grid</a></li>
			<li><a href="#t5">Fixed Columns</a></li>
		</ul>
	</div>
	<div am-col-main="">
		<div am-row>
			<div am-col>
				<h1>Grids</h1>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<h2 id="t1">Base Grid</h2>
			</div>
		</div>
		<div am-row="">
			<div am-col="1">
				<div class="content">1</div>
			</div>
			<div am-col="11">
				<div class="content">11</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="2">
				<div class="content">2</div>
			</div>
			<div am-col="10">
				<div class="content">10</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="3">
				<div class="content">3</div>
			</div>
			<div am-col="9">
				<div class="content">9</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="4">
				<div class="content">4</div>
			</div>
			<div am-col="8">
				<div class="content">8</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="5">
				<div class="content">5</div>
			</div>
			<div am-col="7">
				<div class="content">7</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="6">
				<div class="content">6</div>
			</div>
			<div am-col="6">
				<div class="content">6</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="7">
				<div class="content">7</div>
			</div>
			<div am-col="5">
				<div class="content">5</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="8">
				<div class="content">8</div>
			</div>
			<div am-col="4">
				<div class="content">4</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="9">
				<div class="content">9</div>
			</div>
			<div am-col="3">
				<div class="content">3</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="10">
				<div class="content">10</div>
			</div>
			<div am-col="2">
				<div class="content">2</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="11">
				<div class="content">11</div>
			</div>
			<div am-col="1">
				<div class="content">1</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="12">
				<div class="content">12</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; 12 columns by default &#45;&#45;&#62;
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss: 

// grid
$cols: 12 !default;
$row: em(1200) !default;
$gutter: em(30) !default;

&#45;&#45;&#62;

&lt;div am-row&gt;
  &lt;div am-col="1"&gt;&lt;/div&gt; &lt;div am-col="11"&gt;&lt;/div&gt;
  &lt;div am-col="2"&gt;&lt;/div&gt; &lt;div am-col="10"&gt;&lt;/div&gt;
  &lt;div am-col="3"&gt;&lt;/div&gt; &lt;div am-col="9"&gt;&lt;/div&gt;
  &lt;div am-col="4"&gt;&lt;/div&gt; &lt;div am-col="8"&gt;&lt;/div&gt;
  &lt;div am-col="5"&gt;&lt;/div&gt; &lt;div am-col="7"&gt;&lt;/div&gt;
  &lt;div am-col="6"&gt;&lt;/div&gt; &lt;div am-col="6"&gt;&lt;/div&gt;
  &lt;div am-col="7"&gt;&lt;/div&gt; &lt;div am-col="5"&gt;&lt;/div&gt;
  &lt;div am-col="8"&gt;&lt;/div&gt; &lt;div am-col="4"&gt;&lt;/div&gt;
  &lt;div am-col="9"&gt;&lt;/div&gt; &lt;div am-col="3"&gt;&lt;/div&gt;
  &lt;div am-col="10"&gt;&lt;/div&gt; &lt;div am-col="2"&gt;&lt;/div&gt;
  &lt;div am-col="11"&gt;&lt;/div&gt; &lt;div am-col="1"&gt;&lt;/div&gt;
  &lt;div am-col="12"&gt;&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>

		<div am-row>
			<div am-col>
				<h2 id="t2">Responsive Grid</h2>
			</div>
		</div>
		
		<div am-row>
			<div am-col="12 md-6 lg-9 xl-3">
				<div class="content">12 md-6 lg-9 xl-3</div>
			</div>
			<div am-col="12 md-6 lg-3 xl-9">
				<div class="content">12 md-6 lg-3 xl-9</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;div am-row&gt;
	&lt;div am-col="12 md-6 lg-9 xl-3"&gt;
		&lt;div class="content"&gt;12 md-6 lg-9 xl-3&lt;/div&gt;
	&lt;/div&gt;
	&lt;div am-col="12 md-6 lg-3 xl-9"&gt;
		&lt;div class="content"&gt;12 md-6 lg-3 xl-9&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
		
			
		<div am-row>
			<div am-col>
				<h4>full width:</h4>
			</div>
		</div>
		<div am-row="full">
			<div am-col="5">
				<div class="content">5</div>
			</div>
			<div am-col="7">
				<div class="content">7</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;div am-row="full"&gt;
  ...
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<h4>no-gutter:</h4>
			</div>
		</div>
		<div am-row="no-gutter">
			<div am-col="1">
				<div class="content">1</div>
			</div>
			<div am-col="11">
				<div class="content">11</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;div am-row="no-gutter"&gt;
  ...
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<h4>full width & no-gutter:</h4>
			</div>
		</div>
		<div am-row="full no-gutter">
			<div am-col="3">
				<div class="content">3</div>
			</div>
			<div am-col="9">
				<div class="content">9</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;div am-row="full no-gutter"&gt;
  ...
&lt;/div&gt;
				</code></pre>
			</div>
		</div>

		<div am-row>
			<div am-col>
				<h2 id="t3">Nested Grids</h2>
			</div>
		</div>
		<div am-row>
			<div am-col="6">
				<div class="content">
					<div am-row>
						<div am-col="6">
							<div class="content">6</div>
						</div>
						<div am-col="6">
							<div class="content">6</div>
						</div>
					</div>
				</div>
			</div>
			<div am-col="6">
				<div class="content">
					<div am-row>
						<div am-col="3">
							<div class="content">3</div>
						</div>
						<div am-col="3">
							<div class="content">3</div>
						</div>
						<div am-col="3">
							<div class="content">3</div>
						</div>
						<div am-col="3">
							<div class="content">3</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="">
				<pre><code class="language-markup">
&lt;div am-row&gt;
  &lt;div am-col="6"&gt;
    &lt;div class="content"&gt;
      &lt;div am-row&gt;
        &lt;div am-col="6"&gt;
          &lt;div class="content"&gt;6&lt;/div&gt;
        &lt;/div&gt;
        &lt;div am-col="6"&gt;
          &lt;div class="content"&gt;6&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div am-col="6"&gt;
    &lt;div class="content"&gt;
      &lt;div am-row&gt;
        &lt;div am-col="3"&gt;
          &lt;div class="content"&gt;3&lt;/div&gt;
        &lt;/div&gt;
        &lt;div am-col="3"&gt;
          &lt;div class="content"&gt;3&lt;/div&gt;
        &lt;/div&gt;
        &lt;div am-col="3"&gt;
          &lt;div class="content"&gt;3&lt;/div&gt;
        &lt;/div&gt;
        &lt;div am-col="3"&gt;
          &lt;div class="content"&gt;3&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
				
		<div am-row>
			<div am-col>
				<h4>Customization</h4>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-scss">
@include row(
  $row: false,  // max-width
  $gutter: false,  // gutter
  $common: true,  // basic style
  $inside-row: false  // Is it inside another row?
)
@include col(
  $col,  // How many columns it contains?
  $cols: $cols,  // total columns
  $gutter: false,  // gutter
  $common: true,  // common style
  $pull: false,  // How many columns should be pulled left?
  $push: false,  // How many columns should be pushed right?
  $offset: false,  // How many columns apart from left?
  $centered: false  // center aligned in a row
)
				</code></pre>
			</div>
		</div>
		<div am-row="">
			<div am-col="">
				<p>Example1</p>
			</div>
		</div>
		<div class="my-row">
			<div class="my-column-1">
				<div class="content">.my-column-1</div>
			</div>
			<div class="my-column-2">
				<div class="content">.my-column-2</div>
			</div>
		</div>
		<div am-row="">
			<div am-col="">
				<pre><code class="language-scss">
.my-row { @include row(960px, 20px);}
.my-column-1 { @include col(3, 11, 20px); }
.my-column-2 { @include col(8, 11, 20px); }
				</code></pre>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<p>Example2: change order</p>
			</div>
		</div>
		<div am-row>
			<div class="push-right">
				<div class="content">.push-right <strong>first</strong></div>
			</div>
			<div class="pull-left">
				<div class="content">.pull-left <strong>second</strong></div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<pre><code class="language-scss">
.pull-left,
.push-right { @include col(12, 12, 20px); }
@media screen and (min-width: 62.5em) {
	.push-right { @include col(9, 12, $push: 3); }
	.pull-left { @include col(3, 12, $pull: 9); }
}
				</code></pre>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<h2 id="t4">Block Grid</h2>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<ul class="myblock">
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
					<li><img src="http://placehold.it/400x200" alt="Test image."></li>
				</ul>
			</div>
		</div>
		
		<div am-row>
			<div am-col>
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss: 
// grid
$block-gutter: $gutter !default;
&#45;&#45;&#62;

&lt;&#33;&#45;&#45; ul li &#45;&#45;&#62;
&lt;ul class="myblock"&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  ...
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
&lt;/ul&gt;
		</code><code class="language-scss">

@include block(
$block,  // How many blocks per row?
$gutter: false  // gutter: optional (you don't need to define it again if you have done before)
);

@media screen and (min-width: 640px) {
  .myblock { @include block(2, 60px);}
}
@media screen and (min-width: 1024px) {
  .myblock { @include block(4);}
}
				</code></pre>
			</div>
		</div>

		<div am-row>
			<div am-col>
				<h2 id="t5">Fixed columns</h2>
				<h4>2 columns</h4>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="my-wrap-1">
					<div am-col-main>
						<div class="content">am-col-main: flexible</div>
					</div>
					<div am-col-aside>
						<div class="content">am-col-aside: 300px</div>
					</div>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre><code class="language-markup">
&lt;div class="my-wrap-1"&gt;
  &lt;div am-col-main&gt;
  &lt;/div&gt;
  &lt;div am-col-aside&gt;
  &lt;/div&gt;
&lt;/div&gt;
					</code><code class="language-scss">
@include fixed-col(
$direction,  // Which column has fixed width? left or right?
$aside,  // the width of the fixed width column
$gutter // gutter
);

@media screen and (min-width: 640px){
  .my-wrap-1 { @include fixed-col(right, 300px, 20px);}
}
					</code></pre>
				</div>
			</div>
		</div>

		<div am-row>
			<div am-col>
				<h4>3 columns</h4>
			</div>
		</div>

		<div am-row>
			<div am-col>
				<div class="my-wrap-2">
					<div am-col-left>
						<div class="content">am-col-left: 200px</div>
					</div>
					<div am-col-main>
						<div class="content">am-col-main: flexible</div>
					</div>
					<div am-col-right>
						<div class="content">am-col-right: 300px</div>
					</div>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre><code class="language-markup">
&lt;div class="my-wrap-2"&gt;
  &lt;div am-col-left&gt;
  &lt;/div&gt;
  &lt;div am-col-main&gt;
  &lt;/div&gt;
  &lt;div am-col-right&gt;
  &lt;/div&gt;
&lt;/div&gt;
					</code><code class="language-scss">
@include fixed-col3(
$left,  // the width of the left column
$right,  // the width of the right column
$gutter  // gutter
);

@media screen and (min-width: 640px){
	.my-wrap-2 { @include fixed-col3(200px, 300px, 20px);}
}
					</code></pre>
				</div>
			</div>
		</div>

	</div>
</div>
</body>
</html>
