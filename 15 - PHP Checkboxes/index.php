<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Checkboxes | 15</title>

</head>
<body>
  <form action="index.php" method="post">
    <!-- Single and Double Selection -->
    <h4>Single and Double Food Selection</h4>
    <input type="checkbox" name="pizza" value="Pizza" id="pizza"><label for="pizza">Pizza<br></label> 

    <input type="checkbox" name="hamburger" value="Hamburger" id="hamburger"><label for="hamburger">Hamburger<br></label> 

    <input type="checkbox" name="fries" value="Fries" id="fries"><label for="fries">Fries<br></label> 

    <input type="checkbox" name="taco" value="Taco" id="taco"><label for="taco">Taco<br></label> <br>

    <!-- Triple Selection -->
    <h4>Triple Food Selection</h4>
    <input type="checkbox" name="Pizza" value="Pizza" id="Pizza"><label for="Pizza" name="Pizza">Pizza /multiple selection<br></label> 
    <input type="checkbox" name="Hamburger" value="Hamburger" id="Hamburger"><label for="Hamburger" name="Hamburger">Hamburgers /multiple selection<br></label> 
    <input type="checkbox" name="Fries" value="Fries" id="Fries"><label for="Fries" name="Fries">Fries /multiple selection<br></label> 
    <input type="checkbox" name="Taco" value="Taco" id="Taco"><label for="Taco" name="Taco">Tacos /multiple selection<br></label> <br>

    <!-- Quadruple Selection -->
    <h4>Quadruple Food Selection</h4>
    <input type="checkbox" name="Pizzas" value="Pizzas" id="Pizzas"><label for="Pizzas" name="Pizzas">Pizza /quadruple selection<br></label> 
    <input type="checkbox" name="Hamburgers" value="Hamburgers" id="Hamburgers"><label for="Hamburgers" name="Hamburgers">Hamburgers /quadruple selection<br></label> 
    <input type="checkbox" name="French_fries" value="French_fries" id="French_fries"><label for="French_fries" name="French_fries">Fries /quadruple selection<br></label> 
    <input type="checkbox" name="Tacos" value="Tacos" id="Tacos"><label for="Tacos" name="Tacos">Tacos /quadruple selection<br></label> <br>

    <input type="submit" name="submit" value="Submit">
  </form>
  
</body>
</html>

<?php

  // First condition if submit button was clicked
  if(isset($_POST["submit"])) {

    // Default value
    $price = null;
    $total = null;

    echo "<br><br>"; // new line

    // Second condition to check if checkbox is Set
    if(isset($_POST["pizza"])) {
      $price = 710;
      echo "You Selected Pizza <br>";
      echo "Price is: ₱{$price} <br><br>";
    }
    if(isset($_POST["hamburger"])) {
      $price = 320;
      echo "You Selected Hamburger <br>";
      echo "Price is: ₱{$price} <br><br>";
    }
    if(isset($_POST["fries"])) {
      $price = 180.30;
      echo "You Selected Fries <br>";
      echo "Price is: ₱{$price} <br><br>";
    }
    if(isset($_POST["taco"])) {
      $price = 280.50;
      echo "You Selected Tacos <br>";
      echo "Price is: ₱{$price} <br><br>";
    }

    // Possibilities for Two orders (PIZZA)
    // if(isset($_POST["pizza"]) && isset($_POST["hamburger"])) {
    //   echo "ORDERS: <br> ➡ Pizza 🍕 <br> ➡ Hamburger 🍔 <br>";
    //   $total = 710 + 320;
    //   echo "Your total to Pay is: ₱" . number_format($total);
    // }
    if(isset($_POST["pizza"]) && isset($_POST["fries"])) {
      echo "ORDERS: <br> ➡ Pizza 🍕 <br> ➡ Fries 🍟 <br>";
      $total = 710 + 180.30;
      echo "Your total to Pay is: ₱" . number_format($total);
    }
    if(isset($_POST["pizza"]) && isset($_POST["taco"])) {
      echo "ORDERS: <br> ➡ Pizza 🍕 <br> ➡ Taco 🌮 <br>";
      $total = 710 + 280.50;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Possibilities for Two orders 
    if(isset($_POST["hamburger"]) && isset($_POST["pizza"])) {
      echo "ORDERS: <br> ➡ Hamburger 🍔 <br> ➡ Pizza 🍕 <br>";
      $total = 320 + 710;
      echo "Your total to Pay is: ₱" . number_format($total);
    }
    if(isset($_POST["hamburger"]) && isset($_POST["fries"])) {
      echo "ORDERS: <br> ➡ Hamburger 🍔 <br> ➡ Fries 🍟 <br>";
      $total = 320 + 180.30;
      echo "Your total to Pay is: ₱" . number_format($total);
    }
    if(isset($_POST["hamburger"]) && isset($_POST["taco"])) {
      echo "ORDERS: <br> ➡ Hamburger 🍔 <br> ➡ Taco 🌮 <br>";
      $total = 320 + 280.50;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    if(isset($_POST["fries"]) && isset($_POST["taco"])) {
      echo "ORDERS: <br> ➡ Fries 🍟 <br> ➡ Taco 🌮 <br>";
      $total = 280.50 + 180.30;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Possibilities for Three orders
    // Except for Taco
    if(isset($_POST["Pizza"]) && isset($_POST["Hamburger"]) && isset($_POST["Fries"])) {
      echo "ORDERS: <br> ➡ Pizza (₱710) 🍕 <br> ➡  Hamburger (₱320) 🍔 <br> ➡ Fries 🍟(₱180.30) <br>";
      $total = 710 + 320 + 180.30;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Except for Fries
    if(isset($_POST["Pizza"]) && isset($_POST["Hamburger"]) && isset($_POST["Taco"])) {
      echo "ORDERS: <br> ➡ Pizza (₱710) 🍕 <br> ➡  Hamburger (₱320) 🍔 <br> ➡ Taco (₱280.50) 🌮 <br>";
      $total = 710 + 320 + 280.50;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Except for Hamburger
    if(isset($_POST["Pizza"]) && isset($_POST["Fries"]) && isset($_POST["Taco"])) {
      echo "ORDERS: <br> ➡ Pizza (₱710) 🍕 <br> ➡ Fries (₱180.30) 🍟 <br> ➡ Taco (₱280.50) 🌮 <br>";
      $total = 710 + 180.30 + 280.50;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Except for Pizza
    if(isset($_POST["Hamburger"]) && isset($_POST["Fries"]) && isset($_POST["Taco"])) {
      echo "ORDERS: <br> ➡ Hamburger (₱320) 🍔 <br> ➡ Fries (₱180.30) 🍟 <br> ➡ Taco (₱280.50) 🌮 <br>";
      $total = 320 + 180.30 + 280.50;
      echo "Your total to Pay is: ₱" . number_format($total);
    }

    // Possibilities for four orders
    if(isset($_POST["Pizzas"]) && isset($_POST["Hamburgers"]) && isset($_POST["French_fries"]) && isset($_POST["Tacos"])) {
      echo "ORDERS: <br> ➡ Pizza (₱710) 🍕 <br> ➡  Hamburger (₱320) 🍔 <br> ➡ Fries 🍟(₱180.30) <br> ➡ Taco (₱280.50) 🌮 <br>";
      $total = 710 + 320 + 180.30 + 280.80;
      echo "Your total to Pay is: ₱" . number_format($total);
    }
    

    // OPTIONAL
    // echo "<br><br>DISLIKES:<br>"; - new line
    
    // Third condition to check if checkbox was not Set or Clicked
    // if(empty($_POST["pizza"])) {
    //   echo "You don't like Pizza <br>";
    // }
    // if(empty($_POST["hamburger"])) {
    //   echo "You don't like Hamburgers <br>";
    // }
    // if(empty($_POST["fries"])) {
    //   echo "You don't like Fries <br>";
    // }
    // if(empty($_POST["taco"])) {
    //   echo "You don't like Tacos <br>";
    // }

    // For Selecting Array of elements
    // $foods = $_POST["foods"];
    // echo $foods[0]; - for testing purposes to select a specific element using indexing

    
    // echo "Array of Foods <br>";

    // Using foreach() loop all the elements of the array named '$foods[]'
    // foreach($foods as $food) {
    //   echo $food . "<br>";

    // }
  }
  

?>