<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP If-Else Conditional Statement | 06</title>
</head>
<body>
  
</body>
</html>

<?php
  // If Statement = if some condition is true, do something
  //                if condition is false, don't do it.

  // Example 1: Age Permission to a Website
  $age = 99;

  // Using if-else-if statement condition
  if ($age >= 100) { // for age of 100+
    echo "You are too old enough to enter this site.";
  }
  else if ($age >= 18) { // for 18-99 age above
    echo "You may enter this site because your age was 18+ above.";
  }
  else if ($age == 0) { // using == is comparison operator, we may use this if we want to check a two value is equal or not; Using single equal sign == is for assigning/assignment operator
    echo "You were just born."; // for age is 0
  }
  else if ($age <= 0) {
    echo "That wasn't a valid age."; // for invalid age like -1
  }
  else {
    echo "You must be 18+ to enter this site.";
  }

  echo "<br><br>"; // new line

  // Example 2: Using Boolean value
  $adult = false;

  // Using if-else-if statement condition with Boolean value
  if($adult == true) { // short-hand : if($adult) {}
    echo "You may enter this site because you're ADULT.";
  }
  else {
    echo "You must be an ADULT or 20+ AGE depends on your country LAW to enter.";
  }
?>