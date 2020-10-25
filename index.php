<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $friends = array("John", "Lucy", "Ivy");
    echo 'Partner : ' . $friends[0] . '<br>';
    $friends[3] = 'Steve';
    foreach ($friends as $f) {
      printf("Friend : %s<br>", $f);
    }

    $me_info = array('Name' => 'Derek', 'Street' => '123 Main Street');

    foreach ($me_info as $k => $v) {
      printf("%s : %s<br>", $k, $v);
    }

     ?>

  </body>
</html>
