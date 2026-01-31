
<!-- HEADER SECTION -->
<?php
  // include() = Copies the content of a file (php/html/text)
  //             and includes it in your php file.
  //             Sections of our website become reusable
  //             Changes only need to be made in one piece.

  // Reusable links and essential to use on website's with nav bars

  // Example 1: Using include() for Header and Footer
  include("header.html"); // link to header
?>

<!-- HOMEPAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include: Homepage | 19</title>
</head>
<body>
    This is the Homepage <br>
    Stuff about your home page can go here <br>

</body>
</html>


<!-- FOOTER SECTION -->
<?php
  include("footer.html"); // link to footer
?>