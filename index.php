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
  setcookie("name", "Belac", time() - 1);

  <!-- will destroy cookie in a day -->
  setcookie("name", "Belac", time() + 86400);
  
  <!-- Session variable is more safe against hackers, sessions end on close -->
  $_SESSION["name"] = "12";


</body>
</html>