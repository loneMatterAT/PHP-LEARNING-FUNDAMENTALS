<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Radio Buttons | 14</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="index.php" method="post">
  <div class="main-container">
    <h1 class="header">E-Wallets</h1>
    <!-- Payment Methods -->
    <input type="radio" name="payment" value="GCash"><span class="methods">GCash</span><br>
    <input type="radio" name="payment" value="PayMaya"><span class="methods">PayMaya</span><br>
    <input type="radio" name="payment" value="Coins.ph"><span class="methods">Coins.ph</span><br>

    <!-- Submit Button -->
    <input type="submit" name="confirm" class="confirm-btn" value="Confirm">
  </div>
</form>
  
</body>
</html>

<?php

  // First condition if press the button CONFIRM
  if(isset($_POST["confirm"])) { 

  // Set the variable e_wallets into empty as a default
    $e_wallets = null;

    // Second condition if user was choose or selected a payment method
    if(isset($_POST["payment"])) {
      $e_wallets = $_POST["payment"];
    } 

    // OPTION 1: Using if-else conditional statement
    // Third condition if user make a selection for specific payment method
    // Message indications for selected payment method
    // if($e_wallets == "GCash") {
    //   echo "You selected GCash.";
    // }
    // elseif($e_wallets == "PayMaya") {
    //   echo "You selected PayMaya.";
    // }
    // elseif($e_wallets == "Coins.ph") {
    //   echo "You selected Coins.ph.";
    // }
    // else {
    //   echo "Please select payment method first before we proceed...";
    // }

    // OPTION 2: Using switch statement for more clean codes
    // Third condition if user make a selection for specific payment method
    switch($e_wallets) {
      case "GCash":
        echo "You selected GCash.";
        break;
      case "PayMaya":
        echo "You selected PayMaya.";
        break;
      case "Coins.ph":
        echo "You selected Coins.ph";
        break;
      default:
        echo "Please select payment method first before we proceed...";
    }
  }

  
?>