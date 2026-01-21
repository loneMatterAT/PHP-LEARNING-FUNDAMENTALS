<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise: Pay and Salary | 06</title>
</head>
<body>
  
</body>
</html>

<?php

// // US Pay
//   // Variables
//   $hours = 50;
//   $rate = 695; // 695 peso PH manila rate = $11.71
//   $weekly_pay = null;

//   // For somebody who doesn't work or 0hrs is automatically 0 earnings (No work, No pay)
//   if($hours <= 0) {
//     $weekly_pay = 0; 
//   }
//   // Calculate the weekly pay if working hours is 40 or less
//   else if($hours <= 40) {
//     $weekly_pay = $hours * $rate;
//   }
//   else {
//     $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
//   }
//   // if I work 8hrs in 5 days = 40hrs from (Mon-Fri)
//   echo "Your Weekly Pay is: \$" . $weekly_pay; 

// PH Pay
  // Variables
  $day = 20;
  $daily_rate = 695;
  $monthly_pay = null;

  if($day <= 0 || $day > 20) { // For no days and hours of pay is automatically the montly payment is ₱0 earnings (No work, No pay)
    $montly_pay = 0;
  }

  else if($day <= 20) { // For workers who work 20days (5days x 4weeks = 20days) exclude the Sat-Sun Weekend Day-off (2days x 4weeks = 8days) Totally 28 days a month regardless the holidays
    $montly_pay = $day * $daily_rate;
  }

  else { // For overtime that hours of working was exceeded/above to 8hrs
    $montly_pay = ($daily_rate * 160) + (($day - 160) * ($daily_rate * 1.5));
  }

  // Message
  //  . number_format is for comma , separation of thousands
  echo "Your Montly Pay is: ₱" . number_format($montly_pay); 
?>