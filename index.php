<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    function addNumbers($num_1 = 0, $num_2 = 0) {
      return $num_1 + $num_2;
    }

    printf("5 + 4 = %d<br>", addNumbers(5, 4));

    function changeMe(&$change) {
      $change = 10;
    }

    $change = 5;
    changeMe($change);
    echo "Change : $change<br>";
     ?>

  </body>
</html>
