
<?php
// FIRST PHP SCRIPT

  // Using session_start() to run the global variable on this homepage.php
  // from index.php or our parent file to avoid undefined variables
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session: Home Page | 21</title>
</head>
<body>
  This is the Homepage <br><br>
</body>
</html>


<?php
// SECOND PHP SCRIPT

  // Once we login using the index.php
  // we redirected to login page or the login.php

  // Sample 2: Accessing the specific value using key=value pairs
  //          from index.php file

  // For testing purposes
  echo "Username: " . $_SESSION["username"] . "<br>"; // display the username "John"
  echo "Password: " . $_SESSION["password"] . "<br><br>"; // display the password "user123"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log out</title>
</head>
<body>

  <!-- For Log Out Button -->
   <form action="login.php" method="post">
    <input type="submit" name"logout" value="Log Out">
   </form>  
</body>
</html>

<?php
// THIRD PHP SCRIPT

  // Condition using isset() to see if the log out button was clicked
  if(isset($_POST["logout"])) {

    // We use session_destroy() function to end the session
    // if logging out or clicked the logout button
    session_destroy();

    // After destroying the session, we use the header("") function
    // to go back into login page
    header("Location: index.php");
  }


?>