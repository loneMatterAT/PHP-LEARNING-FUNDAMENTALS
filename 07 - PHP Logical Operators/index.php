<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Logical Operators | 07</title>
</head>
<body>
  
</body>
</html>

<?php 
  // Logical Operators = Combine conditional statements
  // if(condition && condition2)

  /*
   && Logical AND = True if both conditions are true.
   || Logical OR  = True if atleast one condition is true.
   ! Logical NOT  = True if false. False if true.
  */


   // Example 1: Checking a temperatures falls in a certain range
   // Using Logical AND && operator
  //  $temp = 15;

  //  Condition
  //  if($temp >= 0 && $temp <= 30) { // both condition must be True
  //   echo "The Weather is Good!";
  //  }
  // else {
  //   echo "The Weather is Bad.";
  // }

  // Using Logical OR || operator
  // $temp = 30;

  // Condition
  // if($temp < 0 || $temp > 30) { // only one condition is automatically True
  //   echo "The Weather is Bad.";
  // }

  // else {
  //   echo "The Weather is Good!";
  // }

  // Using Logical NOT ! operator
  $temp = 25;
  $cloudy = false;

  if($temp < 0 || $temp > 30) {
    echo "The Weather is Bad. <br>";
  } 
  else {
    echo "The Weather is Good! <br>";
  }

  // Condition 
  if(!$cloudy) { // invert the condition of cloudy = true to false
    echo "It's Sunny!";
  }
  else {
    echo "It's Cloudy.";
  }
?>