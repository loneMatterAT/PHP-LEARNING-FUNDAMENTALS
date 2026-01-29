<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: Finding Hypotenuse of a Right Triangle</title>
</head>
<body>
  
</body>
</html>

<?php
//  Using int $a and $b is to indicate what is the data type of a variable like a basic error handling 
  function hypotenuse(int $a, int $b) { // parameter: $a, $b
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
  }

  // Invoke or call hypotenuse() function with argument
  echo "The Hypotenuse of Variable C is: ";
  echo hypotenuse(4, 3); // 5 ($c = 5)
?>