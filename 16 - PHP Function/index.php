<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Function | 16</title>
</head>
<body>
  
</body>
</html>

<?php

  // function = write some code once, reuse when you need it.
  //            type () after function name to invoke.
  //            ex. add() subtract() multiply() divide()

  // Example 1: Function to say "Happy Birthday"
  function happy_birthday() {
    echo "Happy Birthday Dear you! <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday Dear you! <br>";
    echo "You are x years old! <br><br>";
  }

  // Executing the function or call it and displays the happy birthday song
  happy_birthday();

  // Invoke or call a function many times whenever we like
  happy_birthday();
  happy_birthday();

  // Example 2: Using parameter and argument for a function
  function greet($first_name, $age) { // parameter: $name, $age
    echo "Good Day Everyone! <br>";
    echo "My name is {$first_name}. <br>";
    echo "I am {$age} years old. <br><br>";
  }

  // Call a function
  // Send a function some data, value, or a variable. This what we be
  // known as an ARGUMENT that need a matching PARAMETER like a
  // temporary variable like $first_name that only exixt in the
  // scope of a function named 'greet()'
  greet("John", 20); // argument: "John" a string or a first name and "age"


  // Example 3: Check if the number is ODD or EVEN
  function is_even($number) { // parameter: $number
    // return statement to return a value $result
    return $number % 2; // if number divides by 2s and remainder is 0 that is a EVEN number
  }

  // Invoke or call a function
  echo is_even(10); // argument: 11 (This is a ODD number that has remainder)



?>