<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $rand_str = "    Random String      ";
    printf("Length: %d<br>", strlen($rand_str));
    printf("Length: %d<br>", strlen(ltrim($rand_str)));
    printf("Length: %d<br>", strlen(rtrim($rand_str)));
    printf("Length: %d<br>", strlen(trim($rand_str)));

    $rand_str = trim($rand_str);
    printf("Upper: %s<br>", strtoupper($rand_str));
    printf("Lower: %s<br>", strtolower($rand_str));
    printf("Upper First Character: %s<br>", ucfirst($rand_str));
    printf("1st 6 Characters : %s<br>", substr($rand_str, 0, 6));

     ?>

  </body>
</html>
