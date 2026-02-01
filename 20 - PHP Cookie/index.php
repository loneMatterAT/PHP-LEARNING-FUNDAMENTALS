<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Cookie | 20</title>
</head>
<body>
  
</body>
</html>

<?php
  // setcookie() = Sends a cookie to the browser
  //               A cookie is a small file that the
  //               browser stores on the user's computer.
  //               Used to identify users and possibly
  //               prepare customized web pages for them.

  //               Information about a user stored in a user's
  //               web-browser targeted advertisements,
  //               browsing preferences, and other
  //               non-sensitive data.

  //               F12 -> application to view cookies

  // Parameters:
  // 1. Name
  // 2. Value
  // 3. Expire (time()+seconds)
  // 4. Path
  // 5. Domain
  // 6. Secure
  // 7. HttpOnly

  // Sample 1: Setting and retrieving a cookie that lasts 1 day
  // setcookie("username", "JohnDoe", time() + 86400, "/"); // 86400 = 1 day

  // Check if cookie is set
  // if(isset($_COOKIE["username"])) {
  //   echo "Welcome " . $_COOKIE["username"] . "!<br>";
  // } else {
  //   echo "Welcome guest!<br>";
  // }

  // Sample 2: Basics of Adding a Cookie

  // Cookie 1 for favorite food
  setcookie("fav_food", "Ramen", time() + (86400 * 2), "/"); // 86400 secs = 1 day, then multiply by 2s = 2days before cookie expired; then "/" file path as default

  // Cookie 2 for favorite drink
  setcookie("fav_drink", "Water", time() + (86400 * 3), "/"); // this cookie will expired after 3days

  // Cookie 3 for favorite dessert
  setcookie("fav_dessert", "Mochi", time() + (86400 * 4), "/"); // this cookie will expired after 4days

  // Sample 3: Adding and Deleting a Cookie
  // Deleting the cookie
  setcookie("fav_time", "Midnight", time() - 0, "/"); // this cookie will removed

  // Add the cookie again
  setcookie("fav_time", "Midnight", time() + (86400 * 5), "/"); // this cookie will added

  // Sample 4: Printing Key=value pair using foreach() loop and arrow => function
  foreach($_COOKIE as $key => $value) {  // ACCESSING $_COOKIE Super Global variable
    echo "{$key} = {$value} <br>";
  }

  // Accessing one of the value in a Cookie using a key
  // For example: Displays an advertisement base on somebody's fav food

  if(isset($_COOKIE["fav_food"])) { // if a fav_food has a value then display the favorite food of the user/customer
    echo "BUY SOME {$_COOKIE["fav_food"]}!"; // BUY SOME Ramen!
  }
  else { // if cookie wasn't set or expired by days
    echo "I don't know your favorite food...";
  }

  ?>


