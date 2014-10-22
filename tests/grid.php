<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Responsive Grids Tests</title>
	<?php include 'css.php'; ?>
</head>
<body>
	<div am-row>
		<div am-col>
			<h1>Grids</h1>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<h2>Base Grid</h2>
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
			<div class="code">
				<pre>
assets/scss/site/setting.scss: $grid-number

&lt;div am-row&gt;
  &lt;div am-col="5"&gt;&lt;/div&gt;
  &lt;div am-col="7"&gt;&lt;/div&gt;
&lt;/div&gt;
				</pre>
			</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<p>Customise: </p>
		</div>
	</div>
	<div am-row>
		<div class="my-column-left">
			<div class="content">.my-column-left</div>
		</div>
		<div class="my-column-right">
			<div class="content">.my-column-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-row&gt;
  &lt;div class="my-column-left"&gt;
  &lt;/div&gt;
  &lt;div class="my-column-right"&gt;
  &lt;/div&gt;
&lt;/div&gt;

SCSS:
.my-column-left { @include col(1600, 4000); }
.my-column-right { @include col(2400, 4000); }
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h2>Responsive Grid</h2>
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
			<p>Customise: </p>
		</div>
	</div>
	<div am-row>
		<div class="my-column-2-left">
			<div class="content">.my-column-2-left</div>
		</div>
		<div class="my-column-2-right">
			<div class="content">.my-column-2-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-row&gt;
  &lt;div class="my-column-2-left"&gt;
  &lt;/div&gt;
  &lt;div class="my-column-2-right"&gt;
  &lt;/div&gt;
&lt;/div&gt;

SCSS:
@media screen and (min-width: 640px) {
  .my-column-2-left { @include col(1, 2); }
  .my-column-2-right { @include col(1, 2); }
}
@media screen and (min-width: 1024px) {
  .my-column-2-left { @include col(1, 3); }
  .my-column-2-right { @include col(2, 3); }
}
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>centered:</h4>
		</div>
	</div>
	<div am-row>
		<div am-col="5 centered">
			<div class="content">5 centered</div>
		</div>
		<div class="my-column-centered">
			<div class="content">.my-column-centered</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-row&gt;
  &lt;div class="my-column-centered"&gt;
  &lt;/div&gt;
&lt;/div&gt;

SCSS:
@media screen and (min-width: 640px) {
  .my-column-centered { 
    @include col(2, 3, $centered:true);
  }
}
				</pre>
			</div>
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
			<div class="code">
				<pre>
HTML:
&lt;div am-row="full"&gt;
  ...
&lt;/div&gt;
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>collapse:</h4>
		</div>
	</div>
	<div am-row="collapse">
		<div am-col="1">
			<div class="content">1</div>
		</div>
		<div am-col="11">
			<div class="content">11</div>
		</div>
	</div>
	<div am-row="">
		<div class="my-column">
			<div class="content">.my-column</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-row="collapse"&gt;
  ...
&lt;/div&gt;

--or--

SCSS:
.my-column { @include col(2, $collapse:true); }
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>full width & collapse:</h4>
		</div>
	</div>
	<div am-row="full collapse">
		<div am-col="3">
			<div class="content">3</div>
		</div>
		<div am-col="9">
			<div class="content">9</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-row="full collapse"&gt;
  ...
&lt;/div&gt;
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>offset:</h4>
		</div>
	</div>
	<div am-row>
		<div class="my-col-offset">
			<div class="content">.my-col-offset</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
SCSS:
.my-col-offset { 
  @include col(3); 
  @include col-offset(9);
}
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>order:</h4>
		</div>
	</div>
	<div am-row>
		<div class="my-col-push-left">
			<div class="content">.my-col-push-left</div>
		</div>
		<div class="my-col-pull-right">
			<div class="content">.my-col-pull-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
SCSS:
.my-col-push-left { 
  @include col(3); 
  @include col-push(9);
}
.my-col-pull-right { 
  @include col(9);
  @include col-pull(3);
}
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h2>Block Grid</h2>
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
			<div class="code">
				<pre>
HTML:
&lt;ul class="myblock"&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
  &lt;li&gt;&lt;img src="http://placehold.it/400x200" alt=""&gt;&lt;/li&gt;
&lt;/ul&gt;

SCSS:
@media screen and (min-width: 640px) {
  .myblock { @include block(2);}
}
@media screen and (min-width: 1024px) {
  .myblock { @include block(4);}
}
				</pre>
			</div>
		</div>

	<div am-row>
		<div am-col>
			<h2>Nested Grids</h2>
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

</body>
</html>
