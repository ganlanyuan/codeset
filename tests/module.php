<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>module</title>
	<?php include 'css.php'; ?>
	<style>
	.red { color: red;}
	</style>
	<!-- <script src="test.js"></script> -->
</head>
<body>
<div am-sidebar="below left">
	<ul>
		<li><a href="">item 1</a></li>
		<li><a href="">item 2</a></li>
		<li><a href="">item 3</a></li>
		<li><a href="">item 4</a></li>
		<li><a href="">item 5</a></li>
	</ul>
</div>
<div am-sidebar="left">
	<div am-menu-close><i class="fa fa-remove"></i></div>
	<ul>
		<li><a href="">item 1</a></li>
		<li><a href="">item 2</a></li>
		<li><a href="">item 3</a></li>
		<li><a href="">item 4</a></li>
		<li><a href="">item 5</a></li>
	</ul>
</div>

<div am-upper>
	<div am-row>
		<div am-col>
			<h1>module</h1>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<h2>fixed columns</h2>
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
				<pre>
HTML:
&lt;div class="my-wrap-1"&gt;
  &lt;div am-col-main&gt;
  &lt;/div&gt;
  &lt;div am-col-aside&gt;
  &lt;/div&gt;
&lt;/div&gt;

SCSS:
@media screen and (min-width: 640px){
  .my-wrap-1 { @include fixed-col(right, 300px, 20px);}
}
				</pre>
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
				<pre>
HTML:
&lt;div class="my-wrap-2"&gt;
  &lt;div am-col-left&gt;
  &lt;/div&gt;
  &lt;div am-col-main&gt;
  &lt;/div&gt;
  &lt;div am-col-right&gt;
  &lt;/div&gt;
&lt;/div&gt;

SCSS:
@media screen and (min-width: 640px){
	.my-wrap-2 { @include fixed-col3(200px, 300px, 20px);}
}
				</pre>
			</div>
		</div>
	</div>

	<div am-row>
		<div am-col>
			<h2>sidebar</h2>
			<h4>style 1: move</h4>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div am-menu am-button data="move">am-menu: move</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-sidebar="left"&gt;
  &lt;div am-menu-close&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div am-menu data="move"&gt;&lt;/div&gt;
				</pre>
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
			<div am-menu am-button data="translate-left">am-menu: translate-left</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-sidebar="left"&gt;&lt;/div&gt;
&lt;div am-menu data="translate-left"&gt;&lt;/div&gt;
				</pre>
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
			<div am-menu am-button data="reveal-left">am-menu: reveal-left</div>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;div am-sidebar="below left"&gt;&lt;/div&gt;
&lt;div am-upper&gt;
  &lt;div am-menu data="reveal-left"&gt;&lt;/div&gt;
	...
&lt;/div&gt;
				</pre>
			</div>
		</div>
	</div>

		<div am-row>
			<div am-col>
				<h2>video</h2>
				<h4>flex video</h4>
			</div>
		</div>
		<div am-row>
			<div am-col="9 centered">
				<div class="flex-video">
					<iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre>
&lt;div class="flex-video"&gt;
  &lt;iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
					</pre>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<h4>fixed video</h4>
			</div>
		</div>
		<div am-row>
			<div am-col="9 centered">
				<div class="fixed-video">
					<iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div am-row>
			<div am-col>
				<div class="code">
					<pre>
&lt;div class="fixed-video"&gt;
  &lt;iframe width="560" height="315" src="//www.youtube.com/embed/Y1JPtngL17M" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
					</pre>
				</div>
			</div>
		</div>

	<div am-row>
		<div am-col>
			<h2>article style</h2>
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
				<p>Secularists have condemned communities secretary Eric Pickles for implying that "aggressive secularism" has contributed to the religious conflicts raging in the Middle East and elsewhere.</p>
				<p>In an article in The Daily Telegraph, Pickles says religion is not the problem, but political extremism is.</p>
				<p>He reflects on a summer of seeing Christians being systematically persecuted and murdered in the Middle East, antisemitic attacks in response to Gaza, the fall-out from sexual abuse against children by Pakistani Muslims and murders carried out by Islamic State terrorists who may have included Britons indoctrinated to preach evil at home and enact it abroad.</p>
				<p>ADVERTISEMENT</p>
				<p>"The common theme is the politics of division and hate: attitudes and mantras that seek to divide rather than unite," he writes. "Aggressive secularists would advocate the suppression of religion in the public sphere. Yet this would only perpetuate the message of intolerance towards others. Religion is the not the problem – political and religious extremism is."</p>
				<figure class="left">
					<img class="full" src="http://d.christiantoday.com/en/full/14561/eric-pickles-has-signed-an-order-bringing-into-power-a-part-of-the.jpg?w=370&h=460&l=50&t=40" alt="" width="370" height="290">
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="credit">Photo <a href="">PA</a></span></figcaption>
				</figure>
				<p>He argues that Britain has long been a safe haven for persecuted people, whether French Protestants during the Wars of Religion in the 17th century, European Jews fleeing Nazism, or Bosnian Muslims following the break-up of Yugoslavia. He does not however address the criticisms made previously by Vicar of Baghdad Andrew White, who has condemned Britain for failing to take in a single Christian fleeing persecution in northern Iraq.</p>
				<p>He says individuals can take responsibility through personal belief that discrimination and persecution is wrong and should not be tolerated.</p>
				<p><a href="">Pickles</a>, who also has Cabinet responsibility for faith, continues: "It has been easy this summer to feel pessimistic about the consequences of violent events erupting across the world, and worry about them being echoed here. That's why we must all rally and support our hard-fought British values – tolerance, freedom and the rule of law.</p>
				<p>"This can happen in many ways – from the Jewish and Muslim groups issuing an unprecedented joint statement last week condemning anti-Semitism and anti-Muslim hatred, to the 77-year-old nun who got out a step ladder to take down the jihadi flag flying over her Tower Hamlets housing estate.</p>
				<figure class="right">
					<img class="full" src="http://d.christiantoday.com/en/full/14561/eric-pickles-has-signed-an-order-bringing-into-power-a-part-of-the.jpg?w=370&h=460&l=50&t=40" alt="" width="370" height="290">
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="credit">Photo <a href="">PA</a></span></figcaption>
				</figure>
				<p>"But government can only do so much. The state governs by consent, not coercion. Every law-abiding Briton across class, colour and creed needs to stand up for the liberties that continue to define our nation."</p>
				<p>"Secularism does not seek to destroy religion, it seeks to protect it, but also to ensure that no particular religion has temporal power. For that is when the trouble starts. Mr Pickles recommends that we embrace and promote his particular religion, aggressive Christianity one might say, but that just perpetuates the problem that is tearing the world apart – the desire of one religion to dominate all others.</p>
				<blockquote>"Secularism protects, it does not destroy. It respects all religions equally and it demands that none of them seek to take political power. It is the only way we are going to save ourselves from more conflict."</blockquote>
				<p>Writing in The Spectator blogs section, Damian Thompson questions whether Britain is losing its traditional tolerance towards Muslims. "It feels as if we are on the verge of an anti-Muslim backlash that could spread beyond the strongholds of the aggrieved white working class in Barking and Rochdale and into the home counties."</p>
				<p>He writes that the BNP had popularised the idea that the sexual appetites of Pakistani thugs were fuelled by Islam. Thompson continues: "American conservatives picked over the Koran looking for parallels between the violence of gang rape and the violence of jihad. Islamic scholars dismissed this as a violation of their scriptures. Inconveniently for them, however, 'Muslim' street gangs in Europe and America started playing the same game, arguing that the Koran permitted any assault against the kuffar (non-believers).</p>
				<div class="article-info">"Now British public opinion has woken up, thanks to an explosion of headlines about crucifixions in Iraq and unspeakable assaults on girls in Yorkshire. Some of those headlines are a good thing, in so far as they mark the failure of the liberal establishment to distract our attention towards more fashionable subjects (Gaza)."</div>
			</article>
		</div>
	</div>
	<div am-row>
		<div am-col>
			<div class="code">
				<pre>
HTML:
&lt;article class="article-content"&gt;
  &lt;figure class="centered"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;figure class="left"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;figure class="right"&gt;&lt;img src="" alt="" class="full"&gt;&lt;/figure&gt;
  &lt;div class="article-info"&gt;
   ...
  &lt;/div&gt;
&lt;/article&gt;
				</pre>
			</div>
		</div>
	</div>
</div>
</body>
</html>
