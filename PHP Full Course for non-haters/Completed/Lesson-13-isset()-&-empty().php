<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Username:</label>
    <input type="text" name="username">
    <label>Password:</label>
    <input type="password" name="password">
    <input type="submit" name="login" value="log in">
</body>
</html>


<?php
    // isset() = Returns True if a variable is decalared and not null
    //  empty() = Returns True if a variable is not declared, false, null, ""


//Output the key value pairs.
/*
foreach($_POST as $key => $value){
  echo "{$key} = {$value} <br>";
}
*/



$time = 123;

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];


  if(empty($username)){
    echo "Username is missing.";
  } 
  elseif(empty($username)){
    echo "Username is missing.";
  } 
  elseif(empty($password)){
    echo "Password is missing.";
  }
  else {
    echo "Hello {$username}";
  }
}
  echo "<br>" . $username;
  echo "<br>" . $password;












    $username = 10;


  //echo isset($username);

  /*
  if (isset($username)){
    echo "This variable is set";
  } else {
    echo "This variable is not set";
  }
*/

/*
if (empty($username)){
  echo "This variable is empty";
} else {
  echo "This variable is not empty";
}
*/









?>