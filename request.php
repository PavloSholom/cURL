<?php


  if ($_GET['button_send'] != "" && $_GET['button_send'] == 'button_send'){
    $ch = curl_init($_GET['url']);
    $fp = fopen("example_homepage.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    echo "File written!";
    exit;
  }

?>
