
<?php
  // Working database connection

  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "businessdb";
  $conn = "";

  // try/catch error handling to check if we connected to database
  try {
    $conn = mysqli_connect($db_server,
                          $db_user,
                          $db_pass,
                          $db_name);
  }
  catch(mysqli_sql_exception) {
    echo "Could not connect to database...";
  }
?>