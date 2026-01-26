<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Associative Array | 12</title>
</head>
<body>
  
</body>
</html>

<?php

  // associative array = An array made of key=>value pairs

  // Samples
  //   key     =>  value
  // countries => capitals
  // id => username
  // item => price

  // Note: Key must be unique name because it is used to access the value

  // Example 1: Using Associative Array

  // Array
  // $capitals = array("USA", "Japan", "South Korea", "Philippines");

  // Associative array
  $capitals = array("USA" => "Washington D.C.",
                   "Japan" => "Tokyo",
                   "South Korea" => "Seoul",
                   "Philippines" => "Manila");

  // Let's find the capital of USA
  echo $capitals["USA"]; // Washington D.C.

  echo "<br><br>"; // new line

  // Changing/update the capital
  $capitals["USA"] = "Las Vegas"; // look up the "key" and set a = new value

  // Adding anew key=>value pair in an Associative Array
  $capitals["China"] = "Beijing";

  // array_pop() function to remove the last element of an Associative Array
  array_pop($capitals); // China was removed

  // array_shift() function to remove the first element of an Associative Array
  array_shift($capitals); // USA was removed

  // array_keys() displaying all keys in an Associative Array
  $keys = array_keys($capitals);

  echo "All keys within our Associative Array <br>";

  foreach($keys as $key) {
    echo "{$key} <br>";
  }

  echo "<br><br>"; // new line

  // array_value() displaying all values in an Associative Array
  $values = array_values($capitals);

  echo "All values within our Associative Array <br>";

  foreach($values as $value) {
    echo "{$value} <br>";
  }

  echo "<br><br>"; // new line

  // array_flip() function to flip the key=>value pairs to value=>key of an Associative Array
  // Reassigning a Associative Array into new Array
  $country_capitals = array_flip($capitals);

  echo "Reassigned Associative Array <br>";

  foreach($country_capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
  }

  echo "<br><br>"; // new line

  // array_reverse() function to reverse the order on an Associative Array
  // Reassigning a Associative Array into new Array
  $reverse_capitals = array_reverse($capitals);

  echo "Reverse order of Associative Array <br>";

  foreach($reverse_capitals as $key => $value) {
    echo "{$key} = {$value} <br> ";
  }

  echo "<br><br>"; // new line

  // Print all key=>value pairs of an Associative Array
  foreach($capitals as $key => $value) {
    echo "{$key} = {$value} <br> ";
  }

  echo "<br><br>"; // new line


  // count() function to know the amount of key=>value pairs
  echo "We have key value pairs: " . count($capitals);

  echo "<br><br>"; // new line

?>