<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAMEN HOUSE</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="main-container">
    <div class="first-container">
    <h1 class="resto-name">RAMEN HOUSE</h1>
    <ul class="ramens">
      <li>🍜 Original King Butao Signature bowl (Tonkotsu)</li>
      <li>🍜 Shiromaru Motoaji (Classic Tonkotsu)</li>
      <li>🍜 Akamaru Shinaji (Tonkotsu + Miso & Garlic)</li>
      <li>🍜 Karaka-men (Spicy Ramen)</li>
      <li>🍜 Shio Ramen</li>
      <li>🍜 Tonkotsu Ramen</li>
      <li>🍜 Black Garlic Ramen</li>
      <li>🍜 Spicy Tantanmen</li>
      <li>🍜 Spicy Miso Ramen</li>
      <li>🍜 Seafood Ramen</li>
    </ul>
    </div>

  <div class="second-container">
    <ul class="prices">
      <li>Price: ₱390–₱420 per bowl</li>
      <li>Price: ₱450</li>
      <li>Price: ₱440</li>
      <li>Price: ₱460</li>
      <li>Price: ₱385 (regular) / ₱445 (large)</li>
      <li>Price: ₱395</li>
      <li>Price: ₱425</li>
      <li>Price: ₱495</li>
      <li>Price: ₱600</li>
      <li>Price: ₱220–₱300 (depends on upgrade)</li>
    </ul>
   </div>
  </div>
  
  <div class="total-container">
    <form action="resto.php" method="post">
      <label for="qty">Quantity: </label><br>
      <input type="text" name="quantity"><br>
      <input type="submit" value="total">
    </form>
  </div>
    
  
  
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