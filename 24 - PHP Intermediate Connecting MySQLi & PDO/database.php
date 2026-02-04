<?php

// Sample 1: Creating and managing the databases

// This holds the name of the server
$db_server = "localhost"; 

// This holds the name of the user
$db_user = "root";

// This holds the user password
$db_pass = ""; // empty as default

// This holds the name of the database
$db_name = "businessdb";

// This declare the CONNECTION variable
$conn = ""; // empty as default

// Using try {} catch error handling to avoiding complex error displays
// once the database is not connected.
try {
// Take the conn variable
// mysqli_connect() function with 4 arguments: ($db_server, $db_user, $db_pass, $db_name)
$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass, 
                       $db_name);
}
catch(mysqli_sql_exception) {
  echo "Could not connect to the Database... <br>";
}



// Now, we check if the connection was successfully running
// using conditional statements for testing purposes
if($conn) {
  echo "You are Successfully Connected to the Database! <br>"; 
}


?>