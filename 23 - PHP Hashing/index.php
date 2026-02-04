<?php
  // Start the session to store user data across pages
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hashing | 23</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 

  <!-- Header -->
  <header>
    <h3>Create Account</h3>
  </header>

  <main>
    <!-- Username -->
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id="username"> <br>

    <!-- Password -->
     <label for="password">Password:</label> <br>
     <input type="password" name="password" id="password"> <br>

    <!-- Create Account button -->
     <input type="submit" name="create_account" value="Create Account">
  </main>
    
  </form>
  
</body>
</html>

<?php
  // hashing = transforming sensitive data (password)
  //           into letters, numbers, and/or symbols
  //           via a mathematical process. (similar to encryption)

  //           Hides the original data from 3rd parties.

  // Sample 1: Creating a hash
  // $password = "admin101";

  // // Using password_hash() function
  // // By using bcrypt algorithm for PASSWORD_DEFAULT
  // $hash = password_hash($password, PASSWORD_DEFAULT); // arguments: $password, 

  // echo $hash . "<br><br>"; // displays randomly characters

  // // Using password_verify() for conditions
  // // to verify if the password matches the hash
  // // arguments: $password, $hash
  // if(password_verify("admin101", $hash)) { // if password matches the hash
  //   echo "You are logged in! <br>";
  // }
  // else {
  //   echo "Incorrect password!";
  // }

  // Sample 2: Storing hashed passwords in an array (simulating a database)
  // $users = [
  //   "user1" => password_hash("pass123", PASSWORD_DEFAULT),
  //   "user2" => password_hash("mypassword", PASSWORD_DEFAULT),
  //   "admin" => password_hash("admin101", PASSWORD_DEFAULT)
  // ];

  // // Simulating user login
  // $username = "admin";
  // $password = "admin101";
  // if(isset($users[$username])) { // check if username exists
  //   if(password_verify($password, $users[$username])) {
  //     echo "Welcome, $username! You are logged in.";
  //   }
  //   else {
  //     echo "Incorrect password for $username.";
  //   }
  // }
  // else {
  //   echo "Username $username not found.";
  // }

  // Note: In real applications, always use secure connections (HTTPS)
  //       and follow best practices for handling user credentials.

  // Sample 3: Creating an account for user with username & password then store it in the array $users
  // and logged in login page. If the username & password is correct display welcome message
  // if incorrect display error message like username not found or incorrect password.

  if(isset($_POST["username"]) && isset($_POST["password"])) {
    $new_username = $_POST["username"];
    $new_password = $_POST["password"];

    if(isset($_POST["create_account"])) {

      if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        // Storing the new user with hashed password in the $users array
        // Store new user with hashed password
        $users[$new_username] = password_hash($new_password, PASSWORD_DEFAULT);
        echo "Account created for $new_username! <br>";

        // Once account is created how to redirect to login page
        header("Location: login.php");
        exit(); // Ensure no further output is sent

      }
      else {
        echo "Please fill in all fields to create an account. <br>";
      }
    }
  }
?>