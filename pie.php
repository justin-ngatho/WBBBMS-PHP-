<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Elated.com | Snazzy Animated Pie Chart with HTML5 and jQuery - Demo</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<style>
  <?php include "style.css" ?>
</style>


</head>
<body>

<div id="container">

  <canvas id="chart" width="600" height="500"></canvas>

  <table id="chartData">

    <tr>
      <th>Blood Type</th><th>Blood Group %</th>
     </tr>
    <tr style="color: #800000">
      <td>O+</td><td>45.6%</td>
    </tr>
    <tr style="color: #e6194B">
      <td>A+</td><td>25.2%</td>
    </tr>
    <tr style="color: #f58231">
      <td>B+</td><td>21.28%</td>
    </tr>
    <tr style="color: #fabed4">
      <td>AB+</td><td>4.2%</td>
    </tr>
    <tr style="color: #194E9C">
      <td>O-</td><td>1.8%</td>
    </tr>
    <tr style="color: #4363d8">
      <td>A-</td><td>1.0%</td>
    </tr>
    <tr style="color: #000000">
      <td>B-</td><td>0.9%</td>
    </tr>
    <tr style="color: #911eb4">
      <td>AB-</td><td>0.02%</td>
    </tr>
  </table>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!--[if IE]>
<script src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
<![endif]-->
<script src="app2.js"></script>
</body>
</html>
