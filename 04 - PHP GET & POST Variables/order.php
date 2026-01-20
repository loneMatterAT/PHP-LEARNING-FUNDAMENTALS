<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESTO ORDER PAGE</title>
</head>
<body>
  <form action="order.php" method="post">
    <label for="qty">Quantity: </label><br>
    <input type="text" name="quantity"><br>
    <input type="submit" value="total">
  </form>
  
</body>
</html>

<?php
  // EXERCISE: ORDER PAGE FOR A RESTAURANT
  $item = "Ramen";
  $price = 5.99;
  $quantity = $_POST["quantity"]; // Everytime accessing a POST super variable, it store on local variable which is named '$quantity'
  $total = null;

  $total = $quantity * $price; // Order computation

  // Output Messages
  echo "You have ordered {$quantity}x {$item}/s <br>";
  echo "Your total is: \${$total}";
?>