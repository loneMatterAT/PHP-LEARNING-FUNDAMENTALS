<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP VALIDATE User Inputs | 18</title>
</head>
<body>
  <form action="" method="post">
    <!-- Username -->
    <label for="username">Username:</label><br>
    <input type="text" name="username"><br>

    <!-- Age -->
     <label for="age">Age:</label><br>
    <input type="text" name="age"><br>

    <!-- Email -->
     <label for="email">Email:</label><br>
    <input type="text" name="email"><br>

    <!-- Submit button -->
    <input type="submit" name="login" value="Log in">
  </form>
  
</body>
</html>

<?php

    // VALIDATE INPUTS FOR AGE
    
    // First Condition once login button was clicked
    if(isset($_POST["login"])) {

      // FILTER_VALIDATE_INT to assigned an empty string to age if the inputted characters was not a number
      $stud_age = filter_input(INPUT_POST, "age",
                              FILTER_VALIDATE_INT);

      // VALIDATE INPUTS FOR EMAIL to check if the inputted email address was valid format
      $stud_email = filter_input(INPUT_POST, "email",
                                 FILTER_VALIDATE_EMAIL);

      // First Condition to check if $stud_email is empty
      if(empty($stud_email)) { // true if the inputted email address was not valid format
        echo "That email wasn't valid. <br><br>";
      }
      else { // false if the inputted email address was valid format
        echo "Your email address is {$stud_email}. <br><br>";
      }

      // Second Condition to check if $stud_age is empty
      if(empty($stud_age)) { // true if the inputted characters was not a number like randomized characters or empty 
        echo "That number wasn't valid age. <br><br>";
      }
      else { // false if the inputted characters was a number
        echo "You are {$stud_age} years old. <br><br>";
      }
    }
?>