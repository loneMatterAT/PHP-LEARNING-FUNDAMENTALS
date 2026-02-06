<?php
  include("database.php"); // connection to database file

  // Inserting variables
  $username = "Ronnie";
  $password = "Roinie102";

  // password_hash() inserting password as hash characters for more secured than plain text 'password101'
  $hash = password_hash($password, PASSWORD_DEFAULT);

  // sql variable to handle queries (NOT WORKING)
  $sql = "INSERT INTO students (studName, studPassword)
          VALUES ('$username', '$password')";

  // sql variable to handle queries (NOT WORKING)
  // $sql = "INSERT INTO students (studName, studPassword)
  //         VALUES ('Shawn')";

  // Option 1: Without using try and catch error handling
  // mysqli_query($conn, $sql); to submit the created queries to phpmyadmin
  // mysqli_query($conn, $sql);


  // mysqli_close($conn); to close a connection to our database
  // mysqli_close($conn); - ignore the error of $conn because this is from intelliphense warning

  // Option 2: With using try and catch error handling
  try {
    mysqli_query($conn, $sql);
    echo "User is now registered!";
  }
  catch(mysqli_sql_exception) {
    echo "Could not register user...";
  }

  // Sample solution to $conn error
  // if ($conn instanceof mysqli) {
  //   mysqli_query($conn, $sql);
  // }

  // if ($conn instanceof mysqli) {
  //   mysqli_close($conn);
  // }

?>

