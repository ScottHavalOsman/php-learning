<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $num_oranges = 4;
    $num_bananas = 30;

    if (($num_oranges > 4) && ($num_bananas > 30)) {
      echo "25% Discount <br>";
    } elseif (($num_oranges > 3) && ($num_bananas > 25)) {
      echo "15% Discount <br>";
    } else {
      echo "No Discount";
    }
     ?>

  </body>
</html>
