<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $i = 0;

    while ($i < 10) {
      echo ++$i . ', ';
    }
    echo '<br>';
    for ($i = 0; $i < 10; $i++) {
      if(($i % 2) == 0) {
        continue;
      }
      if($i == 7) break;
      echo $i . ', ';
    }
    echo '<br>';
    $i = 0;
    do{
      echo "Do While : $i<br>";
    } while($i > 0);
     ?>

  </body>
</html>
