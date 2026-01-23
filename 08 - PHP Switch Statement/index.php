<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Switch Statement | 08</title>
</head>
<body>
  
</body>
</html>

<?php
  // switch = replacement to using many elseif statements
  //          more efficient, less code to write.

  // Example 1: Comparison of using if-statement conditions
  $grade = "A";

  if($grade == "A") {
    echo "You did Great 😉 <br><br>";
  }
  elseif($grade == "B") {
    echo "You did Good 😙 <br><br>";
  }
  elseif($grade == "C") {
    echo "You did Okay 🙂 <br><br>";
  }
  elseif($grade == "D") {
    echo "You did Poorly 😥 <br><br>";
  }
  elseif($grade == "F") {
    echo "You Failed 😣 <br><br>";
  }
  else {
    echo "{$grade} is not a Valid Grade... <br><br>";
  }

  // Using Switch Statement for Grade checking
  $stud_grade = "PIZZA";

  switch($stud_grade) {
    case "A":
      echo "Your grade is the Highest! <br><br>";
      break; // break the condition if met
    case "B":
      echo "Your grade is Higher! <br><br>";
      break;
    case "B":
      echo "Your grade is High! <br><br>";
      break;
    case "C":
      echo "Your grade is Passed! <br><br>";
      break;
    case "D":
      echo "Your grade is Good. <br><br>";
      break;
    case "E":
      echo "Your grade is Low.. <br><br>";
      break;
    case "F":
      echo "Your grade is Failed...";
      break;
    default:
      echo "{$stud_grade} is not a Valid Grade... <br><br>";
  }

  // Example 2: Getting the Current Date using Switch Statement
  $date = date("l"); // current day is Friday

  // For testing purposes for setting a date to Saturday
  $date = "Saturday";

  // Setting date to Sunday
  $date = "Friday";
  
  switch($date) {
    case "Friday":
      echo "The Current Day is Friday.";
      break;
    case "Saturday":
      echo "The Next Day is Saturday.";
      break;
    case "Sunday":
      echo "Time to Relax.";
      break;
    case "Monday":
      echo "They hate Mondays.";
      break;
    case "Sunday":
      echo "Tuesday will be good too.";
      break;
    case "Wednesday":
      echo "The Work week is half over!";
      break;
    case "Thursday":
      echo "It's almost the weekend!";
      break;
    default:
      echo "{$date} is not a day...";
  }

  // IN CONCLUSION:
  // Using Switch is good for checking some value or variable
  // many times over.
?>