<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SANITIZE User Inputs | 18</title>
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

  // SANITIZE INPUTS

  // Condition once login button was clicked
  if(isset($_POST["login"])) {

    // $username = $_POST["username"]; - for testing purposes if username entered on text box was displays
    // echo "Hello {$username}!";

    // filter_input() method to avoid any malicious code displays on text box
    // FILTER_SANITIZE_SPECIAL_CHARS to SANITIZE User inputs
    $username = filter_input(INPUT_POST, "username", // Three arguments: 1st: INPUT_POST (because we use post method on our form), 2nd: "username",
                            FILTER_SANITIZE_SPECIAL_CHARS);  // 3rd: FILTER_SANITIZE_SPECIAL_CHARS

    // Message                       
    echo "Hello {$username} <br><br>";


    // Sample JS malicious code that using filter_input() make a display output and doesn't execute it, then any special character was replaced (we can see it in 'page source')
    // <script>alert("You have a VIRUS!");</script>

    // FILTER_SANITIZE_NUMBER_INT to filter all special characters besides numbers in a inputted characters like !@#$%^&*()_+ was removed and numbers only are accepted
    $age = filter_input(INPUT_POST, "age",
                       FILTER_SANITIZE_NUMBER_INT);

    // Message
    echo "You are {$age} years old. <br><br>";

    // FILTER_SANITIZE_EMAIL to filter and remove illegal characters for email and return to correct email format
    $email = filter_input(INPUT_POST, "email",
                        FILTER_SANITIZE_EMAIL);

    // Message
    echo "Your email is {$email}";

  }

?>