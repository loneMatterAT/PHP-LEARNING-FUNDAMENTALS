<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Array | 11</title>
</head>
<body>
  
</body>
</html>

<?php

  // array = "variable" which can hold more than one value at a time.

  // Sample of different variables
  $food_1 = "Apple";
  $food_2 = "Orange";
  $food_3 = "Banana";
  $food_4 = "Coconut";

  // Sample of an array
  $foods = array("Apple", "Orange", "Banana", "Coconut");  // array() is a function

  // Option 1: Line by Line 
  echo $foods[0] . "<br>"; // Apple is index (0) first element
  echo $foods[1] . "<br>"; // Orange (1)
  echo $foods[2] . "<br>"; // Banana (2)
  echo $foods[3] . "<br>"; // Coconut (3)

  echo "<br><br>"; // new line

  // Note: undefined array does not run or read

  // Option 2: Using foreach() method
  foreach($foods as $food) {
    echo $food . "<br>"; // prints all element in array
  }  

  echo "<br><br>"; // new line

  // Changing an element of an array
  $pets = array("Dog", "Cat", "Parrot", "Goldfish", "Rabbit");

  // Change an element
  $pets[0] = "Hamster";

  // array_push() adding new element in the end of an array
  array_push($pets, "Guinea Pig", "Hedgehog");

  //array_ pop() removing the last element of an array
  array_pop($pets); // hedgehog was removed

  // array_shift() removing the first element of an array
  array_shift($pets); // hamster was removed

  // array_reverse() to reverse the element of an array
  $reversed_pets = array_reverse($pets); // cat from first to last element position

  // for reverse
  foreach($reversed_pets as $pet) {
    echo $pet . "<br>";
  }

  // count() function to get the number of element in an array
  echo count($pets); // 5 elements (Guinea Pig, Rabbit, Goldfish, Parrot, Cat)

  // foreach($pets as $pet) {
  //   echo $pet . "<br>";
  // }
?>