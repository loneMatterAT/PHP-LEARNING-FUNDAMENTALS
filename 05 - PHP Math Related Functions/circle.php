<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Measurement of the Circle</title>
</head>
<body>
  <form action="circle.php" method="post">
    <!-- Radius -->
    <label for="radius">Radius:</label> <br>
    <input type="text" name="radius"> <br>
    <input type="submit" value="calculate">
  </form> <br>
  
  
</body>
</html>

<?php
  // Variables
  $radius = $_POST["radius"];

  // Circumference
  $circumference = null;

   // Formula and Computation for Circumference
  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 2); // round and adds 2 decimal places

  // Area
  $area = null;

  // Formula and Computation for Area
  $area = pi() * pow($radius, 2);
  $area = round($area, 2);

  // Volume
  $volume = null;

  // Formula and Computation for Volume
  $volume = 4/3 * pi() * pow($radius, 3);
  $volume = round($volume, 2);
  
  // Ouput for Circumeference
  echo "Circumference = {$circumference}cm <br>";

  // Output for Area
  echo "Area = {$area}cm² <br>";

  // Output for Volume
  echo "Volume = {$volume}cm³ <br>"
?>