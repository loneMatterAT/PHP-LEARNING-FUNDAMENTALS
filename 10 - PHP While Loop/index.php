<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP While Loop | 10</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="submit" name="stop" value="stop">
  </form>
  
</body>
</html>

<?php

  // While Loop = do some code infinitely while some
  //              condition remains true. (eg. stopwatch)

  // For Loop =  was used for limited amount of time.

  // Example 1: Using while loop
  $counter = 0;

  while($counter <= 10) {
    $counter++;
    echo $counter . "<br>";
  }

  // Example 2: Keep track the amount of seconds
  $seconds = 0;
  $isRunning = true;

  while($isRunning) {

    // Condition
    if(isset($_POST["stop"])) { // isset() function is for checking if the button was clicked
      $isRunning = false;
    }
    else {
      // Wait 1 second (infinite loop)
     $seconds++;
     echo $seconds . "<br>";
    }
  }

?>