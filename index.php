<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Mock Title</title>
</head>
<body>
 <!-- <?php
     echo $_GET["name"];
   ?> -->

  <!-- <form method="GET">
    <input type="hidden" name="name" value="Belac">
    <button type="submit">Submit</button>
  </form> -->

  <!-- will destroy cookie right away -->
  <!-- setcookie("name", "Belac", time() - 1); -->

  <!-- will destroy cookie in a day -->
  <!-- setcookie("name", "Belac", time() + 86400); -->
  
  <!-- Session variable is more safe against hackers, sessions end on close -->
  <!-- $_SESSION["name"] = "12"; -->

  <!-- How to start a session -->
  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
  </ul>

  <?php

  $_SESSION['username'] = "BelacCoke";
  echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
    echo "You are not logged in.";
  } else {
    echo "You are logged in.";
  }

  ?>


</body>
</html>