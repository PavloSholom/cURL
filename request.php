<?php


  if ($_POST['send'] != "" && $_POST['send'] == 'send'){
    $ch = curl_init("http://www.example.com/");
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
