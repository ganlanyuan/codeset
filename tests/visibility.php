<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Forms Tests</title>

  <?php include 'css.php'; ?>
</head>

<body>
  <div am-row>
    <div am-col>
      <h1>Visibility</h1>
      <h4>visible</h4>
      <p am-visible="mb">only visible on mobile</p>
      <p am-visible="tl">only visible on tablet</p>
      <p am-visible="dt">only visible on desktop</p>
      <div class="code"><!--  -->
        <pre><code class="language-markup">
&lt;&#33;&#45;&#45; mb = mobile, tl = tablet, dt = desktop &#45;&#45;&#62;
&lt;p am-visible="mb"&gt;only visible on mobile&lt;/p&gt;
&lt;p am-visible="tl"&gt;only visible on tablet&lt;/p&gt;
&lt;p am-visible="dt"&gt;only visible on desktop&lt;/p&gt;
        </code></pre>
      </div>
      <h4>hidden</h4>
      <p am-hidden="mb">only hidden on mobile</p>
      <p am-hidden="tl">only hidden on tablet</p>
      <p am-hidden="dt">only hidden on desktop</p>
      <div class="code">
        <pre><code class="language-markup">
&lt;p am-hidden="mb"&gt;only hidden on mobile&lt;/p&gt;
&lt;p am-hidden="tl"&gt;only hidden on tablet&lt;/p&gt;
&lt;p am-hidden="dt"&gt;only hidden on desktop&lt;/p&gt;
        </code></pre>
      </div>
    </div>
  </div>
</body>
</html>