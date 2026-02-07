<?php
  include("database.php"); // establish the connection

  // $sql = "SELECT * FROM users WHERE user = 'John'"; - for specific display of user info

  $sql = "SELECT * FROM users"; // displays all information of users


  // Creating a query, if successful this function will return an object
  // and restore to variable name '$result'
  $result = mysqli_query($conn, $sql);

  // Condition to find defined how many rows to a query function
  if(mysqli_num_rows($result) > 0) {

  // mysqli_fetch_assoc($result) function will return the 
  // next available row in the result set as an associative array
  // $row is a associative array that can access data by a key
  // and then return the value of that key, for example $row['user'] will return 'John'
  
    // While there are rows, will display each users information
    while($row = mysqli_fetch_assoc($result)) { 
      echo "USER INFORMATION: ";
      echo $row["id"] . "<br>"; // output the id of the use which is '4'
      echo "Username: " . $row["user"] . "<br>"; // output the user name of the user 'John'
      echo "Password: " . $row["password"] . "<br>"; // outpput the password of the user which is 'John123'
      echo "Registration date: " . $row["reg_date"] . "<br><br>"; // output the reg_date of the user created which is '2026-02-07 10:13:22'
    }; 
    
  }
  else { // when the user was not found in database
    echo "No user found...";
  }

  mysqli_close($conn); // close the connection

?>