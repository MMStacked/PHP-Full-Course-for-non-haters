<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Enter a number to count down from:<br></label>
    <input type ="text" name="counter">
    <input type="submit" value="start">
  </form>
</body>
</html>

<?php
    //for loop = repeat some code a certain # of times

/*
  for($i = 0; $i < 20; $i++){
    echo $i . "<br>";
  }
*/




  $counter = $_POST["counter"];

  for($i = $counter; $i > 0; $i--){
    echo $i . "<br>";
  }




?>