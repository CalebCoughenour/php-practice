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

  <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
  </ul>

  <?php
  echo $_SESSION['username'];
  ?>


</body>
</html>