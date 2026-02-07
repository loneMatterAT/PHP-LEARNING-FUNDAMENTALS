<?php
  include("database.php"); // the connection to database
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Project: Registration Form | 28</title>
  <link rel="stylesheet" href="styles.css">
  <!-- font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>
<body>

  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <div class="main-container">
      <!-- HEADER -->
      <header>
        <h2 class="header">STUDENT REGISTRATION FORM</h2>
      </header>
      <main>
        <!-- USERNAME -->
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" class="credentials"><br>

        <!-- PASSWORD -->
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" class="credentials"><br>

        <!--REGISTERED BUTTON -->
        <input type="submit" name="register" value="Register" class="register-btn"><br><br>
      </main>
    </div>
  </form>
  
</body>
</html>

<?php

  // PHP First Project: Registration form

  // Step 1: To check or detect if the REQUEST_METHOD is POST or GET
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div style='text-align: center; color: #1b981f; font-size: 18px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #b1ffaed7; border-radius: 8px; width: 400px; margin: auto;'>REQUEST METHOD STATUS: POST</div>"; // For testing purposes

    // Step 2: If the POST request was made, it should filter both
    //         username and password just incase tey contained a 
    //         malicious script on the input fields
    $username = filter_input(INPUT_POST,
                             "username",
                             FILTER_SANITIZE_SPECIAL_CHARS);

    $password = filter_input(INPUT_POST,
                             "password",
                             FILTER_SANITIZE_SPECIAL_CHARS);

    // Step 3: To check if user enter a characters on input fields
    if(empty($username)) {
      echo "<div style='text-align: center; color: #ff4040; font-size: 16px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #FFE0E0; border-radius: 8px; 10px; width: 450px; margin: 15px auto;'>⚠️ Please enter a username...</div>";
    }
    elseif(empty($password)) {
      echo "<div style='text-align: center; color: #ff4040; font-size: 16px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #ffe0e0df; border-radius: 8px; width: 450px; margin: 15px auto;'>⚠️ Please enter a password...</div>";
    }
    else {
      // password as hash chars and stored it to hash variable make secured
      $hash = password_hash($password, PASSWORD_DEFAULT); 

      // Step 4: SQL queries to INSERT DATAS into DATABASE (phpMyadmin)
      $sql = "INSERT INTO users (user, password)
              VALUES ('$username', '$hash')";
      
      // Step 7: Using try catch to handle the duplication when
      //         the user enter a same credentials as the previous
      //         username or password
      try {
        // Step 5: To initiate the ceated queries 
        mysqli_query($conn, $sql);

        // Step 6: Message display to know that user was succesfully registered
        echo "<div style='text-align: center; color: #259029; font-size: 16px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #b1ffae; border-radius: 8px; width: 450px; margin: 15px auto;'>✔ You are now Registered!</div>";
      }
      catch(mysqli_sql_exception) {
        echo "<div style='text-align: center; color: #FF5252; font-size: 16px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #b1ffae; border-radius: 8px; width: 480px; margin: 15px auto;'>⚠️ That username you enter was already taken...</div>";
      }
    }
  }
  else {
    echo "<div style='text-align: center; color: #e8624a; font-size: 18px; font-weight: bold; margin: 20px 0; padding: 15px; background-color: #b1ffaed1; border-radius: 8px;'>REQUEST METHOD STATUS: GET</div>"; // for testing purposes
  }
  mysqli_close($conn); // to close the mysqli connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <footer>
      <p class="footer">Copyright &copy; 2026</p>
  </footer>
</body>
</html>

