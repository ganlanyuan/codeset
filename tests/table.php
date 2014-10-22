<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tables Tests</title>

  <?php include 'css.php'; ?>
</head>

<body>
  <div am-row>
    <div am-col>
      <h1>Tables Tests</h1>      
      <h4>Default</h4>
      <table am-table="">
        <caption>Perferendis quos, quam placeat aliquid quaerat. Dignissimos perspiciatis, in. Alias, odit dolores.</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
          </tr>
        </tbody>
      </table>
      <div class="code">
        <pre>
&lt;table am-table=""&gt;
  ...
&lt;/table&gt;
        </pre>
      </div>

      <h4>Horizontal Border</h4>
      
      <table am-table="horizontal">
        <thead>
          <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
          </tr>
        </tbody>
      </table>
      <div class="code">
        <pre>
&lt;table am-table="horizontal"&gt;
  ...
&lt;/table&gt;
        </pre>
      </div>

      <h4>Bordered</h4>
      
      <table am-table="bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
          </tr>
        </tbody>
      </table>
      <div class="code">
        <pre>
&lt;table am-table="bordered"&gt;
  ...
&lt;/table&gt;
        </pre>
      </div>

      <h4>Striping-even</h4>
      
      <table am-table="striping-even">
        <thead>
          <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Ford</td>
            <td>Focus</td>
            <td>2008</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Nissan</td>
            <td>Sentra</td>
            <td>2011</td>
          </tr>
          <tr>
            <td>6</td>
            <td>BMW</td>
            <td>M3</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Honda</td>
            <td>Civic</td>
            <td>2010</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Kia</td>
            <td>Soul</td>
            <td>2010</td>
          </tr>
        </tbody>
      </table>
      <div class="code">
        <pre>
&lt;table am-table="striping-even"&gt;
  ...
&lt;/table&gt;
        </pre>
      </div>

      <h3>Striping-odd</h3>
      
      <table am-table="striping-odd">
        <thead>
          <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Ford</td>
            <td>Focus</td>
            <td>2008</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Nissan</td>
            <td>Sentra</td>
            <td>2011</td>
          </tr>
          <tr>
            <td>6</td>
            <td>BMW</td>
            <td>M3</td>
            <td>2009</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Honda</td>
            <td>Civic</td>
            <td>2010</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Kia</td>
            <td>Soul</td>
            <td>2010</td>
          </tr>
        </tbody>
      </table>
      <div class="code">
        <pre>
&lt;table am-table="striping-odd"&gt;
  ...
&lt;/table&gt;
        </pre>
      </div>

    </div>
  </div>
</body>
</html>
