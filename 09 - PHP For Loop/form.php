<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: Form Counter using For Loop | 09</title>
</head>
<body> 
  <form action="form.php" method="post">
    <!-- ENTERING A NUMBER TO COUNT -->
    <label for="count_up">Enter a number to count to: </label>
    <input type="text" name="count_up"> <br>
    <input type="submit" value="start"> <br><br>

    <!-- ENTERING A NUMBER TO COUNT DOWN -->
    <label for="count_down">Enter a number to count down from: </label>
    <input type="text" name="count_down"> <br>
    <input type="submit" value="start"> <br><br>
  </form>
  
</body>
</html>

<?php
// For counter up
 $counter_up = $_POST["count_up"];

 for($i = 1; $i <= $counter_up; $i++) {
  echo $i . "<br>";
 }

 // For counter down
 $counter_down = $_POST["count_down"];

 for($j = $counter_down; $j > 0; $j--) {
  echo $j . "<br>";
 }
?>