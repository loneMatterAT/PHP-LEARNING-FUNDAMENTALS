<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form action="homepage.php" method="post">
    <div class="main-container">
      <!-- Username -->
     <label for="username">Username</label> <br>
     <input type="text" name="username" class="username"> <br>

     <!-- Password -->
      <label for="password">Password</label> <br>
      <input type="password" name="password" class="password"> <br>

     <!-- Login button -->
      <input type="submit" value="Log in" name="login" class="login">
    </div>
    
  </form>
  
</body>
</html>

<?php
?>