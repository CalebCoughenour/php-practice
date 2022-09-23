<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Mock Title</title>
</head>
<body>

  <?php
    echo $_GET["name"];
  ?>

  <form method="GET">
    <input type="hidden" name="name" value="Belac">
    <button type="submit">Submit</button>
  </form>
</body>
</html>