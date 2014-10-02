<?php include 'part/head.php'; ?>
<body>
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/header.php'; ?>
<style>
  .red { color: red; }
  .bold { font-weight: bold; }
  .style { margin-left: 200px;}
</style>
<div am-row>
  <div am-col>
    <div class="test" id="test"><a href="">test me!</a></div>
    <ul id="test2">
      <li><a href="">item1</a></li>
      <li class="active"><a href="">item2</a></li>
      <li><a href="">item3</a></li>
    </ul>
    <p style="height:1000em;">Lorem ipsum dolor.</p>
  </div>
</div>
<?php include 'part/footer.php'; ?>
<?php include 'part/helper/old-ie.php'; ?>
</body>
</html>