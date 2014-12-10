<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Forms Tests</title>

  <?php include 'css.php'; ?>
</head>

<body>
<div am-row="collapse full" class="topbar">
  <div am-col class="topbar-col"><a href="grid.php">grid</a></div>
  <div am-col class="topbar-col"><a href="button.php">button</a></div>
  <div am-col class="topbar-col"><a href="form.php">form</a></div>
  <div am-col class="topbar-col active"><a href="visibility.php">visibility</a></div>
  <div am-col class="topbar-col"><a href="module.php">module</a></div>
  <div am-col class="topbar-col"><a href="icon-font.php">icon-font</a></div>
</div>
<div class="test-wrap">
  <div am-col-aside="" class="fixed-sidebar">
    <ul>
      <li><a href="#t1">visible</a></li>
      <li><a href="#t2">hidden</a></li>

    </ul>
  </div>
  <div am-col-main="">
  <div am-row>
    <div am-col>
      <h1>Visibility</h1>
      <h4 id="t1">visible</h4>
      <p am-visible="mb">only visible on <strong>mobile</strong></p>
      <p am-visible="tl">only visible on <strong>tablet</strong></p>
      <p am-visible="dt">only visible on <strong>desktop</strong></p>
      <div class="code"><!--  -->
        <pre><code class="language-markup">
&lt;&#33;&#45;&#45; mb = mobile, tl = tablet, dt = desktop &#45;&#45;&#62;
&lt;p am-visible="mb"&gt;only visible on mobile&lt;/p&gt;
&lt;p am-visible="tl"&gt;only visible on tablet&lt;/p&gt;
&lt;p am-visible="dt"&gt;only visible on desktop&lt;/p&gt;
        </code></pre>
      </div>
      <h4 id="t2">hidden</h4>
      <p am-hidden="mb">only hidden on <strong>mobile</strong></p>
      <p am-hidden="tl">only hidden on <strong>tablet</strong></p>
      <p am-hidden="dt">only hidden on <strong>desktop</strong></p>
      <div class="code">
        <pre><code class="language-markup">
&lt;p am-hidden="mb"&gt;only hidden on mobile&lt;/p&gt;
&lt;p am-hidden="tl"&gt;only hidden on tablet&lt;/p&gt;
&lt;p am-hidden="dt"&gt;only hidden on desktop&lt;/p&gt;
        </code></pre>
      </div>
      <h4 id="t1">Customize</h4>
      <p class="visible0"><strong>visible0</strong> from 0px to 600px</p>
      <p class="visible1"><strong>visible1</strong> between 600px and 1024px</p> 
      <p class="visible2"><strong>visible2</strong> on 600px and up</p>
      <p class="hidden0"><strong>hidden0</strong> from 0px to 600px</p>
      <p class="hidden1"><strong>hidden1</strong> between 600px and 1024px</p> 
      <p class="hidden2"><strong>hidden2</strong> on 600px and up</p>
      <p class="code"><!--  -->
        <pre><code class="language-scss">
&#47;&#47; visible
.visible0 { @include visible(0, 600); } &#47;&#47; 0-600
.visible1 { @include visible(600, 1024); } &#47;&#47; 600-1024
.visible2 { @include visible(600); } &#47;&#47; 600-oo

&#47;&#47; hidden
.hidden0 { @include hidden(0, 600); } &#47;&#47; 0-600
.hidden1 { @include hidden(600, 1024); } &#47;&#47; 600-1024
.hidden2 { @include hidden(600); } &#47;&#47; 600-oo
        </code></pre>
      </p>
    </div>
  </div>
</div>
</div>
</body>
</html>