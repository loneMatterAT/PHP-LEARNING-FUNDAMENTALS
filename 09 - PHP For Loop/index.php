<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP For Loop | 09</title>
</head>
<body>
  
</body>
</html>

<?php
  // for loop = repeat some code a certain # of times

  // Example 01: Using For Loop
  echo "Incrementation Odd number by 2s <br>";
  for($i = 1; $i <= 10; $i+=2) {
    // Simulation (INCREMENTATION)                         
    // $i = 1;  $i(1) <= 10  (True);  $i(1) + 2 = 3
    // $i = 3;  $i(3) <= 10  (True);  $i(3) + 2 = 5
    // $i = 5;  $i(5) <= 10  (True);  $i(5) + 2 = 7
    // $i = 7;  $i(7) <= 10  (True);  $i(7) + 2 = 9
    // $i = 9;  $i(9) <= 10  (True);  $i(9) + 2 = 11
    // $i = 11; $i(11) <= 10 (False) = condition terminated
    echo $i . "<br>"; // index numbering
    echo "Hello <br><br>";
  } 

  echo "Decrementation Even number by 2s <br>";
  for($j = 10; $j > 0; $j-=2) {
    // Simulation (DECREMENTATION)
    // $j = 10; $j(10) > 0  (True);   $j(10) - 2 = 8
    // $j = 8;  $j(8)  > 0  (True);   $j(8)  - 2 = 6
    // $j = 6;  $j(6)  > 0  (True);   $j(6)  - 2 = 4
    // $j = 4;  $j(4)  > 0  (True);   $j(4)  - 2 = 2
    // $j = 2;  $j(2)  > 0  (True);   $j(2)  - 2 = 0
    // $j = 0;  $j(0)  > 0  (False) = condition terminated
    echo $j . "<br>"; // index numbering
    echo "Hi <br><br>";
  }
?>