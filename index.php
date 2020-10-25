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

    $friends2 = array("Doug");

    $friends = $friends + $friends2;

    sort($friends);
    rsort($friends);
    arsort($me_info);
    krsort($me_info);

    $customers = array(array('Derek', '123 Main Street'),
                       array('Sally', '122 Main Street'));

    for($row = 0; $row < 2; $row++) {
      for($col = 0; $col < 2; $col++) {
        echo $customers[$row][$col] . ', ';
      }
      echo  '<br>';
    }

    $let_str = "A B C D";
    $let_arr = explode(' ', $let_str);
    foreach ($let_arr as $l) {
      printf("Letter ; %s<br>", $l);
    }
    $let_str_2 = implode(' ', $let_arr);
    echo "String : $let_str_2<br>";
    printf("Key Exists : %d<br>",
    array_key_exists('Name', $me_info));
    printf("In Array : %d<br>", in_array('John', $friends));
     ?>

  </body>
</html>
