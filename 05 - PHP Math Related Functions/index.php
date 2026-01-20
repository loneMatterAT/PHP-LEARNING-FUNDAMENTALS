<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Few Math Related Functions | 05</title>
</head>
<body>
    <form action="index.php" method="post">
      <label for="x">x:</label>
      <input type="text" name="x"> <br>

      <label for="y">y:</label>
      <input type="text" name="y"> <br>

      <label for="z">z:</label>
      <input type="text" name="z">
      <input type="submit" value="total">
    </form>
</body>
</html>

<?php
  // Using POST super global variable and cache the POST value in a local variable within the PHP script for convenience
  $x = $_POST["x"]; // Getting x
  $y = $_POST["y"]; // Getting y
  $z = $_POST["z"]; // Getting z

  // FEW MATH RELATED FUNCTIONS
  // 1. Absolute (abs) value function
  $total = null;

  $total = abs($x);
  // echo $total;

  // 2. Round (round) value function
  $total = round($x);
  // echo $total;

  // 3. Floor (floor) value function
  $total = floor($x);
  // echo $total;

  // 4. Ceiling (ceil) value function
  $total = ceil($x);
  // echo $total;

  // 5. Power (pow) value function
  $total = pow($x, $y);
  // echo $total;

  // 6. Square root (sqrt) value function
  $total = sqrt($x);
  // echo $total;

  // 7. Max (highest) value function
  $total = max($x, $y, $z);
  // echo $total;

  // 8. Min (lowest) value function
  $total = min($x, $y, $z);
  // echo $total;

  // 9. pi value function
  $total = pi(); // 3.1415926535898
  // echo $total;

  // 10. Random (rand) value function
  $total = rand(1, 6); // default: billion random numbers; set min(1) and max(6) value that usually used on six dices roll, the min(1) and max(100)
  echo $total;




?>