<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="Lesson-5-Math-Functions-Part-1.php" method="post">
    <label>x:</label>
    <input type="text" name="x">
    <input type="submit" value="total">
    <label>y:</label>
    <input type="text" name="y">
    <input type="submit" value="total">
    <label>z:</label>
    <input type="text" name="z">
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = sqrt($x);
//$total = pow($x, $y);
//$total = max($x, $y, $z);
//$total = min($x, $y, $z);
//$total = pi();
$total = rand(90, 100);


echo $total;





?>