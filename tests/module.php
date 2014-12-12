<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>module</title>
	<?php include 'css.php'; ?>
	<style>
		[am-nav~="reveal-left"],
    [am-nav~="reveal-right"] {display: none;}
	</style>
	<script>
	ready(function () {
		k('[am-nav-icon]').mouseover(function() {
				var style = k(this).attr('data-style');
				if (style === 'move-left' || style === 'move-right' || style === 'translate-left' || style === 'translate-right' || style === 'rotate-left' || style === 'rotate-right' || style === 'rotate-top' || style === 'rotate-bottom' || style=== 'scale-left' || style=== 'scale-right') {
          k('[am-nav~="reveal-left"]').hide();
					k('[am-nav~="reveal-right"]').hide();
				}
				k('[am-content]').attr('am-content', style);
				setTimeout(function() {
					if(style === 'reveal-left' || style === 'reveal-right'){
						k('[am-nav~=' + style + ']').show();
					}
				},400);
				if(style === 'scale-left' || style === 'scale-right'){
					k('body').css('background-color', '#000');
				} else {
					k('body').css('background-color', '#fff');
				}
			});
	});
	</script>
</head>
<body>

<nav am-nav="move-left">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">move item 1</a></li>
    <li>
      <span am-icon-haschild class="ic-triangle-right"></span>
      <a href="">Autem, soluta</a>
      <ul am-subnav="">
        <li am-navback=""><span class="ic-triangle-left"></span>back</li>
        <li class="current"><a href="">Lorem ipsum</a></li>
        <li><a href="">Vitae, reprehenderit</a></li>
        <li>
          <span am-icon-haschild class="ic-triangle-right"></span>
          <a href="">Fuga, velit</a>
          <ul am-subnav="">
            <li am-navback=""><span class="ic-triangle-left"></span>back</li>
            <li><a href="">Voluptate, fugit</a></li>
            <li><a href="">Reiciendis, quaerat</a></li>
            <li><a href="">Reiciendis, minima</a></li>
            <li><a href="">Ab, ex</a></li>
          </ul>
        </li>
        <li><a href="">Voluptatibus, cupiditate</a></li>
        <li><a href="">Repellat, esse</a></li>
      </ul>
    </li>
    <li><a href="">move item 3</a></li>
    <li><a href="">move item 4</a></li>
    <li><a href="">move item 5</a></li>
  </ul>
</nav>

<nav am-nav="move-right">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">move item 1</a></li>
    <li><a href="">move item 2</a></li>
    <li><a href="">move item 3</a></li>
    <li><a href="">move item 4</a></li>
    <li><a href="">move item 5</a></li>
  </ul>
</nav>

<nav am-nav="translate-left">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">translate item 1</a></li>
    <li><a href="">translate item 2</a></li>
    <li><a href="">translate item 3</a></li>
    <li><a href="">translate item 4</a></li>
    <li><a href="">translate item 5</a></li>
  </ul>
</nav>

<nav am-nav="translate-right">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">translate item 1</a></li>
    <li><a href="">translate item 2</a></li>
    <li><a href="">translate item 3</a></li>
    <li><a href="">translate item 4</a></li>
    <li><a href="">translate item 5</a></li>
  </ul>
</nav>

<nav am-nav="reveal-left">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">reveal item 1</a></li>
    <li><a href="">reveal item 2</a></li>
    <li><a href="">reveal item 3</a></li>
    <li><a href="">reveal item 4</a></li>
    <li><a href="">reveal item 5</a></li>
  </ul>
</nav>

<nav am-nav="reveal-right">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">reveal item 1</a></li>
    <li><a href="">reveal item 2</a></li>
    <li><a href="">reveal item 3</a></li>
    <li><a href="">reveal item 4</a></li>
    <li><a href="">reveal item 5</a></li>
  </ul>
</nav>

<nav am-nav="rotate-left">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">rotate item 1</a></li>
    <li><a href="">rotate item 2</a></li>
    <li><a href="">rotate item 3</a></li>
    <li><a href="">rotate item 4</a></li>
    <li><a href="">rotate item 5</a></li>
  </ul>
</nav>

<nav am-nav="rotate-right">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">rotate item 1</a></li>
    <li><a href="">rotate item 2</a></li>
    <li><a href="">rotate item 3</a></li>
    <li><a href="">rotate item 4</a></li>
    <li><a href="">rotate item 5</a></li>
  </ul>
</nav>

<nav am-nav="rotate-top">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">rotate item 1</a></li>
    <li><a href="">rotate item 2</a></li>
    <li><a href="">rotate item 3</a></li>
    <li><a href="">rotate item 4</a></li>
    <li><a href="">rotate item 5</a></li>
  </ul>
</nav>

<nav am-nav="rotate-bottom">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">rotate item 1</a></li>
    <li><a href="">rotate item 2</a></li>
    <li><a href="">rotate item 3</a></li>
    <li><a href="">rotate item 4</a></li>
    <li><a href="">rotate item 5</a></li>
  </ul>
</nav>

<nav am-nav="scale-left">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">scale item 1</a></li>
    <li><a href="">scale item 2</a></li>
    <li><a href="">scale item 3</a></li>
    <li><a href="">scale item 4</a></li>
    <li><a href="">scale item 5</a></li>
  </ul>
</nav>

<nav am-nav="scale-right">
  <div am-nav-close=""><span class="ic-close"></span></div>
  <ul>
    <li><a href="">scale item 1</a></li>
    <li><a href="">scale item 2</a></li>
    <li><a href="">scale item 3</a></li>
    <li><a href="">scale item 4</a></li>
    <li><a href="">scale item 5</a></li>
  </ul>
</nav>

<div am-content="reveal-left">
<div am-content-cover=""></div>
<div am-row="no-gutter full" class="topbar">
	<div am-col class="topbar-col"><a href="grid.php">grid</a></div>
	<div am-col class="topbar-col"><a href="button.php">button</a></div>
	<div am-col class="topbar-col"><a href="form.php">form</a></div>
	<div am-col class="topbar-col"><a href="visibility.php">visibility</a></div>
	<div am-col class="topbar-col active"><a href="module.php">module</a></div>
	<div am-col class="topbar-col"><a href="icon-font.php">icon-font</a></div>
</div>
<div class="test-wrap">
	<div class="fixed-sidebar" am-col-aside>
		<ul>
			<li><a href="#t1">mobile nav</a></li>
			<li><a href="#t2">video</a></li>
			<li><a href="#t3">article style</a></li>
			<li><a href="#t4">breadcrumb</a></li>
      <li><a href="#t5">pagination</a></li>
      <li><a href="#t6">dropdown</a></li>
			<li><a href="#t7">tooltip</a></li>
		</ul>
	</div>
	<div am-col-main="">
	<div am-row>
		<div am-col>
			<h1>module</h1>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<h2 id="t1">mobile nav</h2>
			<h4>style 1: move</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
      <div am-nav-icon="" data-style="move-left" am-button="">Move-left</div>
			<div am-nav-icon="" data-style="move-right" am-button="">Move-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; left, right are available &#45;&#45;&#62;
&lt;nav am-nav="move-left"&gt;
  &lt;div am-nav-close&gt;&lt;/div&gt;
  &lt;div&gt;navigation&lt;/div&gt;
&lt;/nav&gt;
&lt;div am-content="move-left"&gt;
  &lt;div am-content-cover&gt;&lt;/div&gt;
  &lt;div am-nav-icon data-style="move-left"&gt;&lt;/div&gt;
  &lt;div&gt;main content&lt;/div&gt;
&lt;/div&gt;

&lt;&#33;&#45;&#45; subnav &#45;&#45;&#62;
&lt;li&gt;
  &lt;span am-icon-haschild class="ic-triangle-right"&gt;&lt;/span&gt;
  &lt;a href=""&gt;Fuga, velit&lt;/a&gt;
  &lt;ul am-subnav&gt;
    &lt;li am-navback&gt;&lt;span class="ic-triangle-left"&gt;&lt;/span&gt;back&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;Voluptate, fugit&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;Reiciendis, quaerat&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;Reiciendis, minima&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;Ab, ex&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/li&gt;
        </code><code class="language-scss">
// assets/scss/pure/components/_pure-variables.scss: default setting
// am-nav
$generate-nav-css: (
  move: true,  // style
  translate: false,
  reveal: false,
  rotate: false,
  scale: false,

  left: true,  // direction
  right: false,
  top: false,
  bottom: false,

  subnav: true,
  styled-icon: true
) !default;

$am-nav-bg: #000 !default;
$am-nav-width: 200px !default;
$am-nav-fontsize: 14 !default;
$am-nav-a-padding: .9em 1.6em !default;
$am-cover-bg: rgba(0,0,0,.35) !default;

$nav-icon-color: #333 !default;
$nav-icon-active-color: #fd5619 !default;
$nav-icon-bg-color: #fff !default;
$nav-icon-inverted: false !default;
				</code></pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>style 2: translate</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
      <div am-nav-icon="" data-style="translate-left" am-button="">translate-left</div>
			<div am-nav-icon="" data-style="translate-right" am-button="">translate-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; left, right are available &#45;&#45;&#62;
&lt;nav am-nav="translate-left"&gt;
  &lt;div am-nav-close=""&gt;&lt;/div&gt;
  &lt;div&gt;navigation&lt;/div&gt;
&lt;/nav&gt;
&lt;div am-content="translate-left"&gt;
  &lt;div am-content-cover=""&gt;&lt;/div&gt;
  &lt;div am-nav-icon="" data-style="translate-left"&gt;&lt;/div&gt;
  &lt;div&gt;main content&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>style 3: reveal</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
      <div am-nav-icon="" data-style="reveal-left" am-button="">reveal-left</div>
			<div am-nav-icon="" data-style="reveal-right" am-button="">reveal-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; left, right are available &#45;&#45;&#62;
&lt;nav am-nav="reveal-left"&gt;
  &lt;div am-nav-close=""&gt;&lt;/div&gt;
  &lt;div&gt;navigation&lt;/div&gt;
&lt;/nav&gt;
&lt;div am-content="reveal-left"&gt;
  &lt;div am-content-cover=""&gt;&lt;/div&gt;
  &lt;div am-nav-icon="" data-style="reveal-left"&gt;&lt;/div&gt;
  &lt;div&gt;main content&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>style 4: rotate</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
      <div am-nav-icon="" data-style="rotate-left" am-button="">rotate-left</div>
      <div am-nav-icon="" data-style="rotate-right" am-button="">rotate-right</div>
      <div am-nav-icon="" data-style="rotate-top" am-button="">rotate-top</div>
			<div am-nav-icon="" data-style="rotate-bottom" am-button="">rotate-bottom</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; left, right, top, bottom are available &#45;&#45;&#62;
&lt;nav am-nav="rotate-left"&gt;
  &lt;div am-nav-close=""&gt;&lt;/div&gt;
  &lt;div&gt;navigation&lt;/div&gt;
&lt;/nav&gt;
&lt;div am-content="rotate-left"&gt;
  &lt;div am-content-cover=""&gt;&lt;/div&gt;
  &lt;div am-nav-icon="" data-style="rotate-left"&gt;&lt;/div&gt;
  &lt;div&gt;main content&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>style 4: scale</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
      <div am-nav-icon="" data-style="scale-left" am-button="">scale-left</div>
			<div am-nav-icon="" data-style="scale-right" am-button="">scale-right</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; left, right are available &#45;&#45;&#62;
&lt;nav am-nav="scale-left"&gt;
  &lt;div am-nav-close=""&gt;&lt;/div&gt;
  &lt;div&gt;navigation&lt;/div&gt;
&lt;/nav&gt;
&lt;div am-content="scale-left"&gt;
  &lt;div am-content-cover=""&gt;&lt;/div&gt;
  &lt;div am-nav-icon="" data-style="scale-left"&gt;&lt;/div&gt;
  &lt;div&gt;main content&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h4>styled icon</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div am-nav-icon="styled"><span></span></div>
			<div am-nav-icon-close="styled"><span></span></div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss: $nav-icon-active-color &#45;&#45;&#62;
&lt;div am-nav-icon="styled" data="reveal-left"&gt;&lt;span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div am-nav-icon-close="styled"&gt;&lt;span&gt;&lt;/span&gt;&lt;/div&gt;
				</code></pre>
			</div>
		</div>
	</div>

		<div am-row>
			<div am-col>
				<h2 id="t2">video</h2>
				<h4>flex video</h4>
			</div>
		</div>
		<div am-row>
			<div am-col="centered">
				<div am-flex-video="">
					<iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre><code class="language-markup">
&lt;div am-flex-video=""&gt;
  &lt;iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
					</code></pre>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<h4>fixed video</h4>
			</div>
		</div>
		<div am-row>
			<div am-col="centered">
				<div am-fixed-video="">
					<iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre><code class="language-markup">
&lt;div am-fixed-video=""&gt;
  &lt;iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
					</code></pre>
				</div>
			</div>
		</div>

	<div am-row>
		<div am-col>
			<h2 id="t3">article style</h2>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<article class="article-content">
				<figure class="centered">
					<img class="full" src="http://www.trbimg.com/img-54219918/turbine/la-me-ln-port-los-angeles-fire-toxic-air-20140-001/750/750x422" alt="">
					<div class="credit">Photo PA</div>
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
				</figure>
				<p>"The common theme is the politics of division and hate: attitudes and mantras that seek to divide rather than unite," he writes. "Aggressive secularists would advocate the suppression of religion in the public sphere. Yet this would only perpetuate the message of intolerance towards others. Religion is the not the problem – political and religious extremism is."</p>
				<figure class="left">
					<img class="full" src="http://d.christiantoday.com/en/full/14561/eric-pickles-has-signed-an-order-bringing-into-power-a-part-of-the.jpg?w=370&h=460&l=50&t=40" alt="" width="370" height="290">
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="credit">Photo <a href="">PA</a></span></figcaption>
				</figure>
				<p>He argues that Britain has long been a safe haven for persecuted people, whether French Protestants during the Wars of Religion in the 17th century, European Jews fleeing Nazism, or Bosnian Muslims following the break-up of Yugoslavia. He does not however address the criticisms made previously by Vicar of Baghdad Andrew White, who has condemned Britain for failing to take in a single Christian fleeing persecution in northern Iraq.</p>
				<p><a href="">Pickles</a>, who also has Cabinet responsibility for faith, continues: "It has been easy this summer to feel pessimistic about the consequences of violent events erupting across the world, and worry about them being echoed here. That's why we must all rally and support our hard-fought British values – tolerance, freedom and the rule of law.</p>
				<figure class="right">
					<img class="full" src="http://d.christiantoday.com/en/full/14561/eric-pickles-has-signed-an-order-bringing-into-power-a-part-of-the.jpg?w=370&h=460&l=50&t=40" alt="" width="370" height="290">
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="credit">Photo <a href="">PA</a></span></figcaption>
				</figure>
				<p>"But government can only do so much. The state governs by consent, not coercion. Every law-abiding Briton across class, colour and creed needs to stand up for the liberties that continue to define our nation."</p>
				<blockquote>"Secularism protects, it does not destroy. It respects all religions equally and it demands that none of them seek to take political power. It is the only way we are going to save ourselves from more conflict."</blockquote>
				<p>He writes that the BNP had popularised the idea that the sexual appetites of Pakistani thugs were fuelled by Islam. Thompson continues: "American conservatives picked over the Koran looking for parallels between the violence of gang rape and the violence of jihad. Islamic scholars dismissed this as a violation of their scriptures. Inconveniently for them, however, 'Muslim' street gangs in Europe and America started playing the same game, arguing that the Koran permitted any assault against the kuffar (non-believers).</p>
				<div class="article-info">"Now British public opinion has woken up, thanks to an explosion of headlines about crucifixions in Iraq and unspeakable assaults on girls in Yorkshire. Some of those headlines are a good thing, in so far as they mark the failure of the liberal establishment to distract our attention towards more fashionable subjects (Gaza)."</div>
			</article>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre><code class="language-markup">
&lt;article class="article-content"&gt;
  &lt;figure class="centered"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;figure class="left"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;figure class="right"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;div class="article-info"&gt;
   ...
  &lt;/div&gt;
&lt;/article&gt;
				</code></pre>
			</div>
		</div>
	</div>
	<div am-row="">
		<div am-col="">
			<h2 id="t4">breadcrumb</h2>
		</div>
	</div>
	<div am-row="">
		<div am-col="">
			<ul am-breadcrumb>
				<li><a href="">Home</a></li>
				<li><a href="">News</a></li>
				<li class="active"><a href="">Local News</a></li>
			</ul>
			<pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss

// breadcrumb 
$breadcrumb-font-size: 12;
$breadcrumb-color: #212121;
$breadcrumb-active-color: #b4b4b4;
$breadcrumb-fw-bold: true;
$breadcrumb-uppercase: true;
$breadcrumb-gap-content: '/';
$breadcrumb-gap-width: 1.2em;
&#45;&#45;&#62;

&lt;ul am-breadcrumb&gt;
  &lt;li&gt;&lt;a href=""&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=""&gt;News&lt;/a&gt;&lt;/li&gt;
  &lt;li class="active"&gt;&lt;a href=""&gt;Local News&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
			</code></pre>
		</div>
	</div>
  <div am-row="">
    <div am-col="">
      <h2 id="t5">pagination</h2>
    </div>
  </div>
  <div am-row="">
    <div am-col="">
      <ul am-pagination>
        <li class="prev"><a href=""></a></li>
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li class="ellipsis"><a href="">...</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li class="next"><a href=""></a></li>
      </ul>
      <pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss

// pagination
$pagination-fz: 14 !default;
$pagination-a-padding: em(7, $pagination-fz) em(10, $pagination-fz) em(4, $pagination-fz) !default;
$pagination-color: #212121 !default;
$pagination-bg-color: #fff !default;
$pagination-hover-color: #fff !default;
$pagination-hover-bg-color: #212121 !default;
$pagination-ellipsis-color: #999 !default;
$pagination-text-align-center: true !default;
$pagination-prev: '◄' !default;
$pagination-next: '►' !default;
&#45;&#45;&#62;

&lt;ul am-pagination&gt;
  &lt;li class="prev"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li class="active"&gt;&lt;a href=""&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=""&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li class="ellipsis"&gt;&lt;a href=""&gt;...&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=""&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=""&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li class="next"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
      </code></pre>
    </div>
  </div>
	<div am-row="">
		<div am-col="">
			<h2 id="t6">dropdown</h2>
		</div>
	</div>
  <div am-row="">
    <div am-col="">
      <div am-dropdown="">
        <div>dropdown <span class="ic-triangle-down"></span></div>
        <ul am-dropdown-menu>
          <li><a href="">item 01</a></li>
          <li><a href="">item 02</a></li>
          <li><a href="">item 03</a></li>
        </ul>
      </div>
      <pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss

// dropdown
$dropdown-css: true !default;
$dropdown-menu-bgc: #fff !default;
$dropdown-menu-border: 1px solid #dbdbdb !default;
$dropdown-menu-shadow: rgba(0,0,0,0.15) 0px 6px 12px !default;
$dropdown-menu-link-padding: 0.31em 1.25em !default;
&#45;&#45;&#62;

&lt;div am-dropdown=""&gt;
  &lt;div&gt;dropdown &lt;span class="ic-triangle-down"&gt;&lt;/span&gt;&lt;/div&gt;
  &lt;ul am-dropdown-menu&gt;
    &lt;li&gt;&lt;a href=""&gt;item 01&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item 02&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item 03&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
      </code></pre>
    </div>
  </div>
  <div am-row="">
    <div am-col="">
      <p>By default, the dropdown-menu will show on hover. If you want it shows only on click, just remove <code>[am-dropdown]</code> and add <code>[am-dropdown-toggle]</code></p>
      <div>
        <div am-dropdown-toggle="">dropdown <span class="ic-triangle-down"></span></div>
        <ul am-dropdown-menu>
          <li><a href="">item 01</a></li>
          <li><a href="">item 02</a></li>
          <li><a href="">item 03</a></li>
        </ul>
      </div>
      <pre><code class="language-markup">
&lt;&#33;&#45;&#45; shows on click &#45;&#45;&#62;
&lt;div&gt;
  &lt;div am-dropdown-toggle&gt;dropdown &lt;span class="ic-triangle-down"&gt;&lt;/span&gt;&lt;/div&gt;
  &lt;ul am-dropdown-menu&gt;
    &lt;li&gt;&lt;a href=""&gt;item 01&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item 02&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=""&gt;item 03&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
      </code></pre>
    </div>
  </div>
  <p>Customization</p>
	<div am-row="">
		<div am-col="">
      <ul class="my-dropdown-menu-1">
        <li><a href="">item 01</a></li>
        <li><a href="">item 02</a></li>
        <li><a href="">item 03</a></li>
      </ul>
      <ul class="my-dropdown-menu-2">
        <li><a href="">item 01</a></li>
        <li class="current"><a href="">item 02</a></li>
        <li><a href="">item 03</a></li>
      </ul>
			<pre><code class="language-scss">
.my-dropdown-menu-1 { @extend %dropdown-menu;}

@mixin dropdown-menu(
  $background-color: #fff,
  $border: 1px solid #dbdbdb,
  $border-radius: 0.19em,
  $a-padding: 0.31em 1.25em
  ){...}

.my-dropdown-menu-2 { @include dropdown-menu(#0c43cd,false,false,5px);} &#47;&#47; remove border & border-radius
			</code></pre>
		</div>
	</div>
  <div am-row="">
    <div am-col="">
      <h2 id="t7">tooltip</h2>
    </div>
  </div>
  <div am-row="">
    <div am-col="">
      <div style="padding:50px">
        <div data-tooltip="left" data-title="I'm on the left!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">left</div>
        <div data-tooltip="top" data-title="I'm on the top!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">top</div>
        <div data-tooltip="bottom" data-title="I'm on the bottom!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">bottom</div>
        <div data-tooltip="right" data-title="I'm on the right!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">right</div>
        <div data-tooltip="right" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">I got a lot of text.</div>
      </div>
    <pre><code class="language-markup">
&lt;div data-tooltip="left" data-title="I'm on the left!"&gt;left&lt;/div&gt;
&lt;div data-tooltip="top" data-title="I'm on the top!"&gt;top&lt;/div&gt;
&lt;div data-tooltip="bottom" data-title="I'm on the bottom!"&gt;bottom&lt;/div&gt;
&lt;div data-tooltip="right" data-title="I'm on the right!"&gt;right&lt;/div&gt;
      </code></pre>
    </div>
  </div>
  <div am-row="">
    <div am-col="">
      <div style="padding:50px">
        <div data-tooltip="success left" data-title="I'm a success tooltip!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">success</div>
        <div data-tooltip="info right" data-title="I'm a info tooltip!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">info</div>
        <div data-tooltip="warning top" data-title="I'm a warning tooltip!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">warning</div>
        <div data-tooltip="alert bottom" data-title="I'm a alert tooltip!" style="display: inline-block; padding: 5px 10px; margin-right: 5px;">alert</div>
      </div>
      <pre><code class="language-markup">
&lt;&#33;&#45;&#45; alerts &#45;&#45;&#62;

&lt;div data-tooltip="success left" data-title="I'm a success tooltip!"&gt;success&lt;/div&gt;
&lt;div data-tooltip="info right" data-title="I'm a info tooltip!"&gt;info&lt;/div&gt;
&lt;div data-tooltip="warning top" data-title="I'm a warning tooltip!"&gt;warning&lt;/div&gt;
&lt;div data-tooltip="alert bottom" data-title="I'm a alert tooltip!"&gt;alert&lt;/div&gt;
      </code></pre>
    </div>
  </div>
  <div am-row="">
    <div am-col="">
      <p>Customization</p>
      <div style="padding: 50px">
        <div am-tooltip="left" style="position: relative; display: inline-block; opacity: 1; margin-right: 10px; margin-bottom: 10px;">I'm a left tooltip. Lorem ipsum dolor. Lorem ipsum dolor.</div>
        <div am-tooltip="top" style="position: relative; display: inline-block; opacity: 1; margin-right: 10px; margin-bottom: 10px;">I'm a top tooltip. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
        <div am-tooltip="bottom" style="position: relative; display: inline-block; opacity: 1; margin-right: 10px; margin-bottom: 10px;">I'm a bottom tooltip. Lorem ipsum dolor sit amet.</div>
        <div am-tooltip="right" style="position: relative; display: inline-block; opacity: 1; margin-right: 10px; margin-bottom: 10px;">I'm a right tooltip. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, explicabo.</div>
      </div>
      <pre><code class="language-markup">
&lt;&#33;&#45;&#45; assets/scss/pure/components/_pure-variables.scss

// tooltip
$tooltip-bgc: #212121 !default;
$tooltip-border: false !default;
$tooltip-border-radius: 0.25em !default;
$tooltip-arrow-size: 6px !default;
$tooltip-width: 17em !default;
$alerts:(
  success: #3A945B,
  info: #2270C1,
  warning: #DE770F,
  alert: #DE2D0F
) !default;
&#45;&#45;&#62;
      </code></pre>
    </div>
  </div>

	</div>
	</div>
</div>
</body>
</html>
