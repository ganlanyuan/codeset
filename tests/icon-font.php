<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>icon-font Tests</title>

	<?php include 'css.php'; ?>
	<style type="text/css">
		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;font-family:inherit;font-size:100%;vertical-align:baseline}
		body{line-height:1;color:#000;background:#fff}
		ol,ul{list-style:none}
		table{border-collapse:separate;border-spacing:0;vertical-align:middle}
		caption,th,td{text-align:left;font-weight:normal;vertical-align:middle}
		a img{border:none}
		*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
		body{font-family:'Dosis','Tahoma',sans-serif}
		.container{margin:15px auto;width:80%}
		h1{margin:40px 0 20px;font-weight:700;font-size:38px;line-height:32px;color:#fb565e}
		h2{font-size:18px;padding:0 0 21px 5px;margin:45px 0 0 0;text-transform:uppercase;font-weight:500}
		.small{font-size:14px;color:#a5adb4;}
		.small a{color:#a5adb4;}
		.small a:hover{color:#fb565e}
		.glyphs.character-mapping{margin:0 0 20px 0;padding:20px 0 20px 30px;color:rgba(0,0,0,0.5);border:1px solid #d8e0e5;-webkit-border-radius:3px;border-radius:3px;}
		.glyphs.character-mapping li{margin:0 30px 20px 0;display:inline-block;width:90px}
		.glyphs.character-mapping .icon{margin:10px 0 10px 15px;padding:15px;position:relative;width:55px;height:55px;color:#162a36 !important;overflow:hidden;-webkit-border-radius:3px;border-radius:3px;font-size:32px;}
		.glyphs.character-mapping .icon svg{fill:#000}
		.glyphs.character-mapping input{margin:0;padding:5px 0;line-height:12px;font-size:12px;display:block;width:100%;border:1px solid #d8e0e5;-webkit-border-radius:5px;border-radius:5px;text-align:center;outline:0;}
		.glyphs.character-mapping input:focus{border:1px solid #fbde4a;-webkit-box-shadow:inset 0 0 3px #fbde4a;box-shadow:inset 0 0 3px #fbde4a}
		.glyphs.character-mapping input:hover{-webkit-box-shadow:inset 0 0 3px #fbde4a;box-shadow:inset 0 0 3px #fbde4a}
		.glyphs.css-mapping{margin:0 0 60px 0;padding:30px 0 20px 30px;color:rgba(0,0,0,0.5);border:1px solid #d8e0e5;-webkit-border-radius:3px;border-radius:3px;}
		.glyphs.css-mapping li{margin:0 30px 20px 0;padding:0;display:inline-block;overflow:hidden}
		.glyphs.css-mapping .icon{margin:0;margin-right:10px;padding:13px;height:50px;width:50px;color:#162a36 !important;overflow:hidden;float:left;font-size:24px}
		.glyphs.css-mapping input{margin:0;margin-top:5px;padding:8px;line-height:16px;font-size:16px;display:block;width:150px;height:40px;border:1px solid #d8e0e5;-webkit-border-radius:5px;border-radius:5px;background:#fff;outline:0;float:right;}
		.glyphs.css-mapping input:focus{border:1px solid #fbde4a;-webkit-box-shadow:inset 0 0 3px #fbde4a;box-shadow:inset 0 0 3px #fbde4a}
		.glyphs.css-mapping input:hover{-webkit-box-shadow:inset 0 0 3px #fbde4a;box-shadow:inset 0 0 3px #fbde4a}
	</style>
</head>
<body>
<div am-row="collapse full" class="topbar">
	<div am-col class="topbar-col"><a href="grid.php">grid</a></div>
	<div am-col class="topbar-col"><a href="button.php">button</a></div>
	<div am-col class="topbar-col"><a href="form.php">form</a></div>
	<div am-col class="topbar-col"><a href="visibility.php">visibility</a></div>
	<div am-col class="topbar-col"><a href="module.php">module</a></div>
	<div am-col class="topbar-col active"><a href="icon-font.php">icon-font</a></div>
</div>
<div am-row="">
	<div am-col="">
			<h1>icon-font</h1>
			<p class="small">This font was created with<a href="http://fontastic.me/">Fontastic</a></p>
			<h2>CSS mapping</h2>
			<ul class="glyphs css-mapping">
				<li>
					<div class="icon ic-comment"></div>
					<input type="text" readonly="readonly" value="comment">
				</li>
				<li>
					<div class="icon ic-comment-discussion"></div>
					<input type="text" readonly="readonly" value="comment-discussion">
				</li>
				<li>
					<div class="icon ic-three-bars"></div>
					<input type="text" readonly="readonly" value="three-bars">
				</li>
				<li>
					<div class="icon ic-chat-bubble"></div>
					<input type="text" readonly="readonly" value="chat-bubble">
				</li>
				<li>
					<div class="icon ic-chat-bubble-two"></div>
					<input type="text" readonly="readonly" value="chat-bubble-two">
				</li>
				<li>
					<div class="icon ic-email-envelope"></div>
					<input type="text" readonly="readonly" value="email-envelope">
				</li>
				<li>
					<div class="icon ic-facebook"></div>
					<input type="text" readonly="readonly" value="facebook">
				</li>
				<li>
					<div class="icon ic-facebook-square"></div>
					<input type="text" readonly="readonly" value="facebook-square">
				</li>
				<li>
					<div class="icon ic-heart"></div>
					<input type="text" readonly="readonly" value="heart">
				</li>
				<li>
					<div class="icon ic-letter-mail"></div>
					<input type="text" readonly="readonly" value="letter-mail">
				</li>
				<li>
					<div class="icon ic-star-two"></div>
					<input type="text" readonly="readonly" value="star-two">
				</li>
				<li>
					<div class="icon ic-star"></div>
					<input type="text" readonly="readonly" value="star">
				</li>
				<li>
					<div class="icon ic-share-square"></div>
					<input type="text" readonly="readonly" value="share-square">
				</li>
				<li>
					<div class="icon ic-share-square-1"></div>
					<input type="text" readonly="readonly" value="share-square-1">
				</li>
				<li>
					<div class="icon ic-tumblr"></div>
					<input type="text" readonly="readonly" value="tumblr">
				</li>
				<li>
					<div class="icon ic-tumblr-square"></div>
					<input type="text" readonly="readonly" value="tumblr-square">
				</li>
				<li>
					<div class="icon ic-twitter"></div>
					<input type="text" readonly="readonly" value="twitter">
				</li>
				<li>
					<div class="icon ic-twitter-square"></div>
					<input type="text" readonly="readonly" value="twitter-square">
				</li>
				<li>
					<div class="icon ic-talk-chat-2"></div>
					<input type="text" readonly="readonly" value="talk-chat-2">
				</li>
				<li>
					<div class="icon ic-talk-chat"></div>
					<input type="text" readonly="readonly" value="talk-chat">
				</li>
				<li>
					<div class="icon ic-rss-two"></div>
					<input type="text" readonly="readonly" value="rss-two">
				</li>
				<li>
					<div class="icon ic-rss"></div>
					<input type="text" readonly="readonly" value="rss">
				</li>
				<li>
					<div class="icon ic-play"></div>
					<input type="text" readonly="readonly" value="play">
				</li>
				<li>
					<div class="icon ic-linkedin-square"></div>
					<input type="text" readonly="readonly" value="linkedin-square">
				</li>
				<li>
					<div class="icon ic-linkedin"></div>
					<input type="text" readonly="readonly" value="linkedin">
				</li>
				<li>
					<div class="icon ic-google-plus"></div>
					<input type="text" readonly="readonly" value="google-plus">
				</li>
				<li>
					<div class="icon ic-google-plus-1"></div>
					<input type="text" readonly="readonly" value="google-plus-1">
				</li>
				<li>
					<div class="icon ic-call-phone-square"></div>
					<input type="text" readonly="readonly" value="call-phone-square">
				</li>
				<li>
					<div class="icon ic-call-phone"></div>
					<input type="text" readonly="readonly" value="call-phone">
				</li>
				<li>
					<div class="icon ic-search-1"></div>
					<input type="text" readonly="readonly" value="search-1">
				</li>
				<li>
					<div class="icon ic-down-open"></div>
					<input type="text" readonly="readonly" value="down-open">
				</li>
				<li>
					<div class="icon ic-left-open"></div>
					<input type="text" readonly="readonly" value="left-open">
				</li>
				<li>
					<div class="icon ic-right-open"></div>
					<input type="text" readonly="readonly" value="right-open">
				</li>
				<li>
					<div class="icon ic-up-open"></div>
					<input type="text" readonly="readonly" value="up-open">
				</li>
				<li>
					<div class="icon ic-heart-empty"></div>
					<input type="text" readonly="readonly" value="heart-empty">
				</li>
				<li>
					<div class="icon ic-camera"></div>
					<input type="text" readonly="readonly" value="camera">
				</li>
				<li>
					<div class="icon ic-youtube-square"></div>
					<input type="text" readonly="readonly" value="youtube-square">
				</li>
				<li>
					<div class="icon ic-youtube"></div>
					<input type="text" readonly="readonly" value="youtube">
				</li>
				<li>
					<div class="icon ic-instagram"></div>
					<input type="text" readonly="readonly" value="instagram">
				</li>
				<li>
					<div class="icon ic-left-quote"></div>
					<input type="text" readonly="readonly" value="left-quote">
				</li>
				<li>
					<div class="icon ic-right-quote"></div>
					<input type="text" readonly="readonly" value="right-quote">
				</li>
				<li>
					<div class="icon ic-close"></div>
					<input type="text" readonly="readonly" value="close">
				</li>
				<li>
					<div class="icon ic-nav"></div>
					<input type="text" readonly="readonly" value="nav">
				</li>
				<li>
					<div class="icon ic-search-2"></div>
					<input type="text" readonly="readonly" value="search-2">
				</li>
				<li>
					<div class="icon ic-video-play"></div>
					<input type="text" readonly="readonly" value="video-play">
				</li>
				<li>
					<div class="icon ic-triangle-down"></div>
					<input type="text" readonly="readonly" value="triangle-down">
				</li>
				<li>
					<div class="icon ic-triangle-left"></div>
					<input type="text" readonly="readonly" value="triangle-left">
				</li>
				<li>
					<div class="icon ic-triangle-right"></div>
					<input type="text" readonly="readonly" value="triangle-right">
				</li>
				<li>
					<div class="icon ic-triangle-up"></div>
					<input type="text" readonly="readonly" value="triangle-up">
				</li>
				<li>
					<div class="icon ic-forward"></div>
					<input type="text" readonly="readonly" value="forward">
				</li>
				<li>
					<div class="icon ic-angle-right"></div>
					<input type="text" readonly="readonly" value="angle-right">
				</li>
				<li>
					<div class="icon ic-angle-left"></div>
					<input type="text" readonly="readonly" value="angle-left">
				</li>
				<li>
					<div class="icon ic-angle-down"></div>
					<input type="text" readonly="readonly" value="angle-down">
				</li>
				<li>
					<div class="icon ic-ptint"></div>
					<input type="text" readonly="readonly" value="ptint">
				</li>
				<li>
					<div class="icon ic-angle-up"></div>
					<input type="text" readonly="readonly" value="angle-up">
				</li>
				<li>
					<div class="icon ic-pinterest"></div>
					<input type="text" readonly="readonly" value="pinterest">
				</li>
				<li>
					<div class="icon ic-pinterest-1"></div>
					<input type="text" readonly="readonly" value="pinterest-1">
				</li>
				<li>
					<div class="icon ic-pinterest-square"></div>
					<input type="text" readonly="readonly" value="pinterest-square">
				</li>
			</ul>
			<div class="code">
				<pre><code class="language-markup">
&lt;!-- HTML --&gt;
&lt;div class="ic-pinterest-square"&gt;&lt;/div&gt;
				</code><code class="language-scss">
&#47;&#47; CSS
.ic-pinterest-square { font-size: 20px; color: blue; }
				</code></pre>
			</div>

			<h2>Character mapping</h2>
			<ul class="glyphs character-mapping">
				<li>
					<div data-icon="a" class="icon"></div>
					<input type="text" readonly="readonly" value="a">
				</li>
				<li>
					<div data-icon="b" class="icon"></div>
					<input type="text" readonly="readonly" value="b">
				</li>
				<li>
					<div data-icon="c" class="icon"></div>
					<input type="text" readonly="readonly" value="c">
				</li>
				<li>
					<div data-icon="j" class="icon"></div>
					<input type="text" readonly="readonly" value="j">
				</li>
				<li>
					<div data-icon="k" class="icon"></div>
					<input type="text" readonly="readonly" value="k">
				</li>
				<li>
					<div data-icon="t" class="icon"></div>
					<input type="text" readonly="readonly" value="t">
				</li>
				<li>
					<div data-icon="u" class="icon"></div>
					<input type="text" readonly="readonly" value="u">
				</li>
				<li>
					<div data-icon="v" class="icon"></div>
					<input type="text" readonly="readonly" value="v">
				</li>
				<li>
					<div data-icon="w" class="icon"></div>
					<input type="text" readonly="readonly" value="w">
				</li>
				<li>
					<div data-icon="x" class="icon"></div>
					<input type="text" readonly="readonly" value="x">
				</li>
				<li>
					<div data-icon="z" class="icon"></div>
					<input type="text" readonly="readonly" value="z">
				</li>
				<li>
					<div data-icon="C" class="icon"></div>
					<input type="text" readonly="readonly" value="C">
				</li>
				<li>
					<div data-icon="D" class="icon"></div>
					<input type="text" readonly="readonly" value="D">
				</li>
				<li>
					<div data-icon="E" class="icon"></div>
					<input type="text" readonly="readonly" value="E">
				</li>
				<li>
					<div data-icon="F" class="icon"></div>
					<input type="text" readonly="readonly" value="F">
				</li>
				<li>
					<div data-icon="G" class="icon"></div>
					<input type="text" readonly="readonly" value="G">
				</li>
				<li>
					<div data-icon="H" class="icon"></div>
					<input type="text" readonly="readonly" value="H">
				</li>
				<li>
					<div data-icon="I" class="icon"></div>
					<input type="text" readonly="readonly" value="I">
				</li>
				<li>
					<div data-icon="M" class="icon"></div>
					<input type="text" readonly="readonly" value="M">
				</li>
				<li>
					<div data-icon="N" class="icon"></div>
					<input type="text" readonly="readonly" value="N">
				</li>
				<li>
					<div data-icon="P" class="icon"></div>
					<input type="text" readonly="readonly" value="P">
				</li>
				<li>
					<div data-icon="Q" class="icon"></div>
					<input type="text" readonly="readonly" value="Q">
				</li>
				<li>
					<div data-icon="U" class="icon"></div>
					<input type="text" readonly="readonly" value="U">
				</li>
				<li>
					<div data-icon="W" class="icon"></div>
					<input type="text" readonly="readonly" value="W">
				</li>
				<li>
					<div data-icon="X" class="icon"></div>
					<input type="text" readonly="readonly" value="X">
				</li>
				<li>
					<div data-icon="Z" class="icon"></div>
					<input type="text" readonly="readonly" value="Z">
				</li>
				<li>
					<div data-icon="0" class="icon"></div>
					<input type="text" readonly="readonly" value="0">
				</li>
				<li>
					<div data-icon="2" class="icon"></div>
					<input type="text" readonly="readonly" value="2">
				</li>
				<li>
					<div data-icon="3" class="icon"></div>
					<input type="text" readonly="readonly" value="3">
				</li>
				<li>
					<div data-icon="9" class="icon"></div>
					<input type="text" readonly="readonly" value="9">
				</li>
				<li>
					<div data-icon="#" class="icon"></div>
					<input type="text" readonly="readonly" value="#">
				</li>
				<li>
					<div data-icon="$" class="icon"></div>
					<input type="text" readonly="readonly" value="$">
				</li>
				<li>
					<div data-icon="%" class="icon"></div>
					<input type="text" readonly="readonly" value="%">
				</li>
				<li>
					<div data-icon="&" class="icon"></div>
					<input type="text" readonly="readonly" value="&amp;">
				</li>
				<li>
					<div data-icon="e" class="icon"></div>
					<input type="text" readonly="readonly" value="e">
				</li>
				<li>
					<div data-icon="f" class="icon"></div>
					<input type="text" readonly="readonly" value="f">
				</li>
				<li>
					<div data-icon="g" class="icon"></div>
					<input type="text" readonly="readonly" value="g">
				</li>
				<li>
					<div data-icon="h" class="icon"></div>
					<input type="text" readonly="readonly" value="h">
				</li>
				<li>
					<div data-icon="p" class="icon"></div>
					<input type="text" readonly="readonly" value="p">
				</li>
				<li>
					<div data-icon="s" class="icon"></div>
					<input type="text" readonly="readonly" value="s">
				</li>
				<li>
					<div data-icon="y" class="icon"></div>
					<input type="text" readonly="readonly" value="y">
				</li>
				<li>
					<div data-icon="r" class="icon"></div>
					<input type="text" readonly="readonly" value="r">
				</li>
				<li>
					<div data-icon="J" class="icon"></div>
					<input type="text" readonly="readonly" value="J">
				</li>
				<li>
					<div data-icon="K" class="icon"></div>
					<input type="text" readonly="readonly" value="K">
				</li>
				<li>
					<div data-icon="L" class="icon"></div>
					<input type="text" readonly="readonly" value="L">
				</li>
				<li>
					<div data-icon="d" class="icon"></div>
					<input type="text" readonly="readonly" value="d">
				</li>
				<li>
					<div data-icon="A" class="icon"></div>
					<input type="text" readonly="readonly" value="A">
				</li>
				<li>
					<div data-icon="B" class="icon"></div>
					<input type="text" readonly="readonly" value="B">
				</li>
				<li>
					<div data-icon="O" class="icon"></div>
					<input type="text" readonly="readonly" value="O">
				</li>
				<li>
					<div data-icon="l" class="icon"></div>
					<input type="text" readonly="readonly" value="l">
				</li>
				<li>
					<div data-icon="m" class="icon"></div>
					<input type="text" readonly="readonly" value="m">
				</li>
				<li>
					<div data-icon="n" class="icon"></div>
					<input type="text" readonly="readonly" value="n">
				</li>
				<li>
					<div data-icon="o" class="icon"></div>
					<input type="text" readonly="readonly" value="o">
				</li>
				<li>
					<div data-icon="q" class="icon"></div>
					<input type="text" readonly="readonly" value="q">
				</li>
				<li>
					<div data-icon="i" class="icon"></div>
					<input type="text" readonly="readonly" value="i">
				</li>
				<li>
					<div data-icon="R" class="icon"></div>
					<input type="text" readonly="readonly" value="R">
				</li>
				<li>
					<div data-icon="S" class="icon"></div>
					<input type="text" readonly="readonly" value="S">
				</li>
				<li>
					<div data-icon="T" class="icon"></div>
					<input type="text" readonly="readonly" value="T">
				</li>
			</ul>
      <div class="code">
        <pre><code class="language-markup">
&lt;!-- HTML --&gt;
&lt;div data-icon="T"&gt;&lt;/div&gt;
        </code><code class="language-scss">
&#47;&#47; CSS
[data-icon="T"] { font-size: 20px; color: blue; }
        </code></pre>
      </div>
		</div>
</div>

<?php include '../part/footer.php'; ?>
<?php include '../part/helper/old-ie.php'; ?>
</body>
</html>