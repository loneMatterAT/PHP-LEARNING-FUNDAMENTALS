<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: LOGIN ACCOUNT | 23</title>
</head>
<body>
  <form action="loginPage.php" method="post">
    <!-- Header -->
     <header>
      <h3>LOGIN ACCOUNT</h3> 
     </header>

    <!-- Contents -->
     <main>
      <label for="username">Username:</label> <br>
      <input type="text" name="username" id="username"> <br>

      <label for="password">Password:</label> <br>
      <input type="password" name="password" id="password"> <br><br>

      <input type="submit" name="login" value="Log in"> <br>
      <input type="submit" name="create" value="Go to Account Creation">
     </main>
  </form>
  
</body>
</html>

<?php

  // Condition to go back to Account Creation Page
  if(isset($_POST["create"])) {
    session_destroy();

    header("Location: createAccount.php");
  }

  // First Condition: Check if Log in btn was clicked
  if(isset($_POST["login"])) {

  // Second Condition: To check if input fields are not empty
  if(!empty($_POST["username"]) && !empty($_POST["password"])) {

  // Wherever in a text box we will assign to a $_SESSION variable
      $_SESSION["username"] = $_POST["username"]; // for username

      $_SESSION["password"] = $_POST["password"]; // for password

      header("Location: homePage.php"); // Redirected to homepage
  }    
  else {
    echo "Empty Credentials for Username/Password...";
  }
 }

?>

  