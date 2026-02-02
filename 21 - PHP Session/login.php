
<?php
  // FIRST PHP SCRIPT

  // session = SGB used to store information on a user
  //           to be used across multiple pages.

  //           A user is assigned a session-id
  //           ex. login credentials

  // Sample 1: Using session_start()
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session: Login Page | 21</title>
</head>
<body>
  <!-- This is the Login page <br>
  <a href="home.php">This goes to Home Page</a> <br><br> -->

  <!-- Login Form -->
   <form action="login.php" method="post">

   <!-- HEADER SECTION -->
   <header>
    <h3> LOGIN PAGE </h3>
   </header>

   <!-- Username -->
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id="username"> <br>

    <!-- Password --> 
     <label for="password">Password:</label> <br>
     <input type="password" name="password" id="password"> <br>

     <!-- Login button -->
      <input type="submit" name="login" value="Log In"> <br>
   </form>
</body>
</html>

<?php
  // SECOND PHP SCRIPT

  // First Condition using isset() function
  if(isset($_POST["login"])) {

    // Second Condition to check if the text box field was empty
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
      
      // Wherever in a text box we will assign to a $_SESSION variable
      $_SESSION["username"] = $_POST["username"]; // for username

      $_SESSION["password"] = $_POST["password"]; // for password

      // echo $_SESSION["username"] . "<br>"; --> for testing purposes to see if the username was displayed
      // echo $_SESSION["password"] . "<br>"; --> for testing purposes to see if the password was displayed

      // We use header("") function once the login button was clicked
      // and all credentials like username and password aren't missing
      header("Location: home.php"); // once login btn clicked redirected to hompage
    }
    // If user doesn't enter any characters on text field like empty
    else {
      echo "Missing Username/Password <br>";
    }
  }
  

  // // We use the $_SESSION[""] Super global variable
  // $_SESSION["username"] = "John";
  // $_SESSION["password"] = "user123";

  // // For testing purposes
  // echo $_SESSION["username"] . "<br>"; // display the username "John"
  // echo $_SESSION["password"] . "<br>"; // display the password "user123"
?>