<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise Countries Capital | 12</title>
</head>
<body>
  <form action="capitals.php" method="post">
    <label for="country">Enter a Country</label> <br>
    <input type="text" name="country"> <br>
    <input type="submit" value="Submit">
  </form>
  
</body>
</html>

<?php

  // Associative array
  $capitals = array("USA" => "Washington D.C.",
                    "China" => "Beijing",
                    "France" => "Paris",
                    "United Kingdom" => "London");

// Reassigned Associative array
// Getting the value or capital of a key or a country
$capital = $capitals[$_POST["country"]];

echo "<br>"; // new line

echo "The Capital is {$capital}.";
?>