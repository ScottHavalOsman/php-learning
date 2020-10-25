<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    function getSum(...$nums) {
      $sum = 0;
      foreach ($nums as $num) {
        $sum += $num;
      }
      return $sum;
    }

    printf("Sum = %d<br>", getSum(1, 2, 3, 4));

    function doMath($x, $y) {
      return array(
        $x + $y,
        $x - $y
      );
    }

    list($sum, $difference) = doMath(5, 4);
    echo "Sum = $sum<br>";
    echo "Difference = $difference<br>";

     ?>

  </body>
</html>
