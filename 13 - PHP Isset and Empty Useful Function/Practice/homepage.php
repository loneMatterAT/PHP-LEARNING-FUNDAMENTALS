<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <!-- lOG OUT -->
   <form action="loginPage.php" method="post">
    <input type="submit" name="logout" value="Log out" class="logout">
   </form>
  
</body>
</html>

<?php
  // SUPER GLOBAL variable and using foreach() method to iterate the all elements in an array
  // This is the detailed indicator of Login result
  foreach($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
  }

  // Conditions
  if(isset($_POST["login"])) {
    // echo "You tried to login."; - for testing purposes

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)) {
      echo "Username is missing...";
    }
    else if(empty($password)) {
      echo "Password is missing...";
    }
    else {
      echo "Hello, Welcome {$username}!";
    }
  }
?>