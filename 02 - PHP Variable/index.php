<?php
  // variable = a reusable container that holds data
  //            string, integer, float, boolean

  // declaring string variables
  $name = "John G."; 
  $food = "Tempura";
  $email = "fake@gmail.com";

  // declaring whole integer number/variables
  $age = 21;
  $users = 2;
  $quantity = 4;

  // declaring floats/decimal numbers
  $gpa = 1.25;
  $price = 5.99;
  $tax_rate = 5.3;

  // declaring boolean variables
  $employed = true;
  $online = false;
  $for_sale = true;

  // displays the string variables
  echo "Hello {$name} <br>"; 
  echo "You like {$food} <br>";
  echo "Your email is {$email} <br>";

  // displaying integer variables
  echo "You are {$age} years old <br>";
  echo "There are {$users} users online <br>";
  echo "You would like to buy {$quantity} items? <br>";

  // displaying the float variables
  echo "Your GPA is: {$gpa} <br>";
  echo "Your Tempura is \${$price} <br>"; // using / backslash or escape sequence for using dollar sign $
  echo "The Sales Tax Rate is: {$tax_rate}% <br>";

  // displaying boolean variables
  echo "Employee Status: {$employed} <br>";
  echo "Online Status: {$online} <br>"; // not appears but if true, appears 1
  echo "Product Status: {$for_sale} <br><br>";

  // mixing variable and outputs
  $total = null; // null means no value 

  // Buying Tempuras
  echo "You have ordered {$quantity} x {$food}s <br>";
  $total = $quantity * $price + $tax_rate;
  echo "Your total is: \${$total} <br><br>";

  // JHS Grade Calculate
  $math_grade = 95;
  $science_grade = 92;
  $english_grade = 88;
  $history_grade = 91;
  $pe_grade = 85;

  // grades variable as null for default
  $grades = null;

  // Reassigning grade variable
  $grades = $math_grade + $science_grade + $english_grade +
            $history_grade + $pe_grade;

  // General Average Computation
  $genAve = $grades / 5;

  echo "Your General Average is: {$genAve}";

  


?>