<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP isset() and empty() Useful Functions</title>
</head>
<body>
  
</body>
</html>

<?php
  // isset() = Returns TRUE if a variable is declared and not null.
  // empty() = Returns TRUE if a variable is not declared, false, null, ""

  // Example 1: Using isset() function
  $username = "John";
  $password = null;

  echo isset($username); // output: 1 means TRUE
  echo isset($password); // output: empty or doesn't display anaything means FALSE

  echo "<br><br>"; // new line

  // Example 2: Using isset() function with conditions
  $user = "Rain";

  // Condition
  if(isset($user)) {
    echo "This variable is SET."; // output this for valued variable, it's either TRUE or FALSE
  }
  else {
    echo "This variable is NOT SET."; // output this for null or empty/unexisted variable
  }

  echo "<br><br>"; // new line


  // Example 3: Using empty() function
  // $employee = null;
  $employee = false;
  // $employee = "";

  // Condition
  if(empty($employee)) {
    echo "This variable is EMPTY."; // output this for null, unexisted, false, and empty variable
  }
  else {
    echo "This variable is NOT EMPTY."; // output this for valued variable
  }




?>