<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: Age Voting Validation and Sell Movie Tickets | 07</title>
</head>
<body>
  
</body>
</html>

<?php

  // Example 1
  // Version 1: Using Logical AND &&
  // $age = 20;
  // $citizen = false;

  // if($age >= 18 && $citizen) {
  //   echo "You can Vote!";
  // }
  // else {
  //   echo "You cannot Vote.";
  // }

  // Version 2: Using Logical OR || and Logical NOT !
  $age = 20;
  $citizen = true;

  if(!$age >= 18 || !$citizen) {
    echo "You cannot Vote. <br><br>";
  }
  else {
    echo "You can Vote! <br><br>";
  }

  // Example 2
  $child = true;
  $senior = false;
  $ticket = null;

  // Child and Senior had a discount for ticket
  if($child || $senior) {
    $ticket = 10;  // $10 ticket for child and senior
  }
  else {
    $ticket = 15;  // $15 ticket for not child nor senior
  }

  // Message
  echo "The ticket price is \${$ticket}"
?>