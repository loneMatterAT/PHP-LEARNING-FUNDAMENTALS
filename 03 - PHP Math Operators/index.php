<?php
  // Arithmetic operators
  // + - * / ** %

  $x = 10;
  $y = 2;
  $z = null;

  // Add
  $z = $x + $y; // 12

  // Subtract
  $z = $x - $y;  // 8

  // Multiply
  $z = $x * $y; // 20

  // Divide
  $z = $x / $y; // 5

  // Pow
  $z = $x ** $y; // 100

  // Modulus/Modulo
  $z = $x % $y; // 0

  // echo $z; 

  // Increment/decrement operators
  // ++, --

  $counter = 0;

  // Incrementation
  $counter++; // 1

  // Decrementation
  $counter--; // -1

  // Counter by 2s
  $counter+=2; // 2

  // Decrement by 3s
  $counter-=3; // -1

  echo $counter;

  /* Operator Precedence (From left to right)
   1st ()
   2nd **
   3rd * / %
   4th + -
  */

   // Sample 1 expression to solve
   $total = 1 + 2 - 3 * 4 / 5 ** 6; // 2.999232
   // 1st: 5 ** 6 = 15,625
   // Update: 1 + 2 - 3 * 4 / 15625
   // 2nd: 3 * 4 = 12
   // Update: 1 + 2 - 12 / 15625
   // 3rd: 12 / 15625 = 0.000768
   // Update: 1 + 2 - 0.000768 
   // 4th: 1 = 2 = 3
   // Update: 3 - 0.000768 = 2.999232
   // Answer: 2.999232
   echo $total;


?>