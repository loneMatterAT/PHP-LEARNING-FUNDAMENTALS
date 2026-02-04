<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: CREATE ACCOUNT | 23</title>
</head>
<body>
  <form action="createAccount.php" method="post">
    <!-- Header -->
     <header>
      <h3>CREATE ACCOUNT</h3> 
     </header>

    <!-- Contents -->
     <main>
      <label for="username">Username:</label> <br>
      <input type="text" name="username" id="username"> <br>

      <label for="password">Password:</label> <br>
      <input type="password" name="password" id="password"> <br><br>

      <input type="submit" name="create" value="Create Account"> <br>
     </main>
  </form>
  
</body>
</html>

<?php
  // Using Array for Temporary Database
  $users = [
    "user1" => password_hash("pass123", PASSWORD_DEFAULT),
    "user2" => password_hash("mypassword", PASSWORD_DEFAULT),
    "admin" => password_hash("admin101", PASSWORD_DEFAULT)
  ];

  // First Condition: Account Creation
  if(isset($_POST["username"]) && isset($_POST["password"])) {
    $new_username = $_POST["username"];
    $new_password = $_POST["password"];

    // Store new user with hashed password
    $users[$new_username] = password_hash($new_password, PASSWORD_DEFAULT);

    // Second Condition: When Create Account btn was clicked
    if(isset($_POST["create"])) {

      // Third Condition: Check if user enter an empty credentials
      if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        echo "Account Successfully Created for {$new_username}! <br><br>";
        
        echo "EXISTING ACCOUNTS:";
        foreach($users as $key => $value) {
          echo "<br>Username: {$key} <br> Hash Password: {$value} <br>"; // testing purposes to check if new_username and password was added
        }

        function loginPage() {
          header("Location: loginPage.php"); // redirected to Login page
        }

        loginPage();
      }
      else {
        echo "Empty Credentials for Username/Password...";
      }
    } 
  }

  // Condition to check if Login Accout btn was clicked (OPTIONAL)
  // if(isset($_POST["login"])) {

    // Condition to redirected in Login Page after Account was created
    // if(!empty($_POST["username"]) && !empty($_POST["password"])) {

    //     // Wherever in a text box we will assign to a $_SESSION variable
    //     $_SESSION["new_username"] = $_POST["username"]; // for username

    //     $_SESSION["new_password"] = $_POST["password"]; // for password

    //     header("Location: loginPage.php"); // redirected to Login page
    // }
    // else {
    //   echo "You must need to Create your Account first. <br>";
    //   echo "Please fill in all fields to create an account... <br>";
    // }
  
?>