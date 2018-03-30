<?php
$a = $_GET['first_name'];
$b = $_GET['last_name'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo $a+$b.'<br>';
      echo $a.' '.$b;
    ?>
  </body>
</html>
