<?php





  if ($_GET['button_send'] != "" && $_GET['button_send'] == 'button_send'){
    setcookie('id','100');
    setcookie('first_name','David');
    setcookie('last_name','Kuzava');
    setcookie('phone','0996357412');

    $ch = curl_init($_GET['url']);
    $fp = fopen("example_homepage.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    $itemLi = "";
    $i = 1;
    foreach($_COOKIE as $key => $value) {
      $itemLi .=
      "<li><a tabindex='0'><label class='checkbox'><input type='checkbox' value='$i'>$value</label></a></li>";
      $i+=1;
    }
    $result[] = $itemLi;
    $itemOpt = "";
    $i = 1;
    foreach($_COOKIE as $key => $value) {
      $itemOpt .=
      "<option value='$i'>$value</option>";
      $i+=1;
    }
    $result[] = $itemOpt;
    // echo json_encode($_COOKIE);

    echo json_encode($result);

    exit;
  }

  // if ($_GET['inputs_data'] != "" && $_GET['inputs_data'] == 'inputs_data'){
  //
  //   echo
  //   "    ";
  //   exit;
  // }

?>
