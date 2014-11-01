<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buttons</title>

	<?php include 'css.php'; ?>
</head>

<body>
	<div am-row>
		<div am-col>
			<h1>Buttons Tests</h1>
			
			<h3>Regular Buttons</h3>
			<div>
				<button am-button>A Regular Button</button>
				<a am-button href="#">An anchor Button</a>
			</div>
			<pre><code class="language-markup">
&lt;button am-button&gt;...&lt;/button&gt;
&lt;a am-button href="#"&gt;...&lt;/a&gt;
			</code></pre>
			
			<h3>Disabled Buttons</h3>
			<div>
				<button am-button="disabled">A Regular Button</button>
			</div>
			<pre><code class="language-markup">
&lt;button am-button="disabled"&gt;...&lt;/button&gt;
			</code></pre>
			
			<h3>Primary Buttons</h3>
			<div>
				<button am-button="primary">A Regular Button</button>
			</div>
			<div class="pre">
				<pre><code class="language-markup">
&lt;button am-button="primary"&gt;...&lt;/button&gt;
				</code></pre>
			</div>
			
			<h3>Customizing Buttons</h3>
			<div>
				<button am-button="bold">bold button</button>
				<button am-button>regular button</button>
				<button am-button="thin">thin button</button>
				<button am-button="simple bold">simple button</button>
			</div>
			<pre><code class="language-markup">
&lt;button am-button="bold"&gt;bold button&lt;/button&gt;
&lt;button am-button&gt;regular button&lt;/button&gt;
&lt;button am-button="thin"&gt;thin button&lt;/button&gt;
&lt;button am-button="simple"&gt;simple button&lt;/button&gt;
			</code></pre>
			
			<h3>Grouped buttons</h3>
			<div class="grouped">
				<a href="" am-button="facebook"><i class="fa fa-facebook"></i> facebook</a>
				<a href="" am-button="twitter"><i class="fa fa-twitter"></i> twitter</a>
				<a href="" am-button="google-plus"><i class="fa fa-google-plus"></i> google-plus</a>
				<a href="" am-button="rss"><i class="fa fa-rss"></i> rss</a>
				<a href="" am-button="email"><i class="fa fa-envelope"></i> email</a>
			</div>
			<pre><code class="language-markup">
&lt;div class="grouped"&gt;
 &lt;a href="" am-button="facebook"&gt;&lt;i class="fa fa-facebook"&gt;&lt;/i&gt; facebook&lt;/a&gt;
 &lt;a href="" am-button="twitter"&gt;&lt;i class="fa fa-twitter"&gt;&lt;/i&gt; twitter&lt;/a&gt;
 &lt;a href="" am-button="google-plus"&gt;&lt;i class="fa fa-google-plus"&gt;&lt;/i&gt; google-plus&lt;/a&gt;
 &lt;a href="" am-button="rss"&gt;&lt;i class="fa fa-rss"&gt;&lt;/i&gt; rss&lt;/a&gt;
 &lt;a href="" am-button="email"&gt;&lt;i class="fa fa-envelope"&gt;&lt;/i&gt; email&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
			<h3>Combined with input</h3>
			<div class="combined">
				<input type="search" placeholder="search..."><input am-button="primary" type="submit" value="Submit">
			</div>
			<pre><code class="language-markup">
&lt;div class="combined"&gt;
 &lt;input type="search" placeholder="search..."&gt;&lt;input am-button="primary" type="submit" value="Submit"&gt;
&lt;/div&gt;
			</code></pre>
			
			<h3>Customize with SASS</h3>
			<ul class="styled">
				<li> <a href="" class="purple-button">purple-button</a> </li>
				<li> <a href="" class="thin-button">thin-button</a> </li>
				<li> <a href="" class="simple-button">simple-button</a> </li>
				<li> <a href="" class="big-button">big-button</a> </li>
				<li> <a href="" class="small-button">small-button</a> </li>
			</ul>
			<pre><code class="language-scss">
.purple-button { @include button(#a80051); }
.thin-button { @include button(#333, $thin:true); }
.simple-button { @include button($color:false, $simple:true); }
.big-button { @include button; font-size: 1.5em; }
.small-button { @include button; font-size: .8em; }
			</code></pre>
		</div>
	</div>
	
</body>
</html>
