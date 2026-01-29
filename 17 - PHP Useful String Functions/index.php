<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Few Useful String Functions | 17</title>
</head>
<body>
  
</body>
</html>

<?php
  $username = "Code Ninja Eyes";
  $phone = "123-456-7890";

  // Variable for implode() function
  $student_name = array("John", "Code", "Eyes");

  // FEW USEFUL STRING FUNCTIONS
  // strtolower() to make a string lowercase
  $username = strtolower($username);

  // strtoupper() to make a string UPPERCASE
  $username = strtoupper($username);

  // trim() to remove spaces before or after the string
  $username = trim($username);

  // str_pad() to pad a string up to a certain amount of characters, with a character specified
  // $username = str_pad($username, 20, "0"); - Twenty zeros "0" or "/"

  // str_replace() to replace a one character to another
  $phone = str_replace("-", "/", $phone); // replace 1st(-) to 2nd(/) forward slash and 3rd(replace $username to $phone) = 1234567890

  // strrev() to reverse the string letter or numbered ordering
  $username = strrev($username); // SEYE EDOC

  // str_shuffle() to shuffle or randomized the string
  $username = str_shuffle($username);

  // strcmp() to compare a string variable like $username to a string value like "Code Eyes"
  $equals = strcmp($username, "CodeEyes"); // result 1 if different, 0 for same, -1 if doesn't had a spaces

  // strlen() to count how many characters in a string
  $count = strlen($username); // 9 characters
  $count = strlen($phone); // 12 characters

  // strpos() to find the position of a character
  $index = strpos($username, " "); // 4th index  of space (C(0), o(1), d(2), e(3) " "(4))
  $index = strpos($phone, "/"); // finding the 1st position of / forward slash (1(0), 2(1), 3(2), /(3))

  // substr() to create a new string to a portion or inside of a string
  $firstname = substr($username, 0, 3); // Code
  $lastname = substr($username, 4); // Eyes

  // explode() to exploading our username, taken each portion of $name and place them an elements into a new array
  $fullname = explode(" ", $username); // our fullname set to an array

  // Use foreach() loop
  foreach($fullname as $name) {
    echo $name . "<br>"; // Code \n Ninja \n Eyes
  }

  // implode() which takes an array and create string/ single string out of them
  $student_name = implode("-", $student_name); // add an " " empty string each element or a dash -
  echo $student_name; // John Code Eyes or John-Code-Eyes

  // Outputs
  echo $username . "<br>";
  echo $phone . "<br>";
  echo $equals . "<br>";
  echo $count . "<br>"; // Code Eyes = 9
  echo $index . "<br>"; // 4
  echo $firstname . "<br>";
  echo $lastname . "<br>";
  echo $fullname . "<br>";

?>