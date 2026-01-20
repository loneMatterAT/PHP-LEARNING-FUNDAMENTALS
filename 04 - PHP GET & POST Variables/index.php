<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- USING GET VARIABLE (less secure/credentials appeared on URL) -->
   <!-- Use GET for searching -->
  <!-- <form action="index.php" method="get"> -->
    <!-- USERNAME -->
    <!-- <label for="username">username:</label><br> -->
    <!-- <input type="text" name="username"><br> -->

    <!-- PASSWORD -->
    <!-- <label for="password">password:</label><br> -->
    <!-- <input type="password" name="password"><br> -->

    <!-- BUTTON -->
    <!-- <input type="submit" value="Log in"> -->
  <!-- </form> -->

  <!-- USING POST VARIABLE (more secure/credentials not appeared on URL) -->
  <!-- Use POST for sensitive data like login -->
  <form action="index.php" method="post">
    <!-- USERNAME -->
    <label for="username">username:</label><br>
    <input type="text" name="username"><br>

    <!-- PASSWORD -->
    <label for="password">password:</label><br>
    <input type="password" name="password"><br>

    <!-- BUTTON -->
    <input type="submit" value="Log in">
  </form>
  
</body>
</html>

<?php
  // $_GET, $_POST = special variables used to collect data from an HTML form
  //                 data is sent to the file in the action attribute of <form>
  //                 <form action="some_file.php" mwthod="get">

  // $_GET =  Data is appended to the url
  //          NOT SECURE
  //          char limit
  //          Bookmark is possible w/ values
  //          GET requests can be cached
  //          Better for a search page

  // Getting users credentials through login
  // echo $_GET["username"] . "<br>"; - GET is like an array
  // echo $_GET["password"] . "<br>"; - . "<br> is a way to concatenate 

  // More easy way to concatenate
  // echo "{$_GET["username"]} <br>";
  // echo "{$_GET["password"]} <br>";


  // $_POST = Data is packaged inside the body of the HTTP request
  //          MORE SECURE
  //          No data limit
  //          Cannot bookmark
  //          GET requests are not cached
  //          Better for submitting credentials.

  // Using POST for user credentials through login
  echo "{$_POST["username"]} <br>";
  echo "{$_POST["password"]} <br>";
?>