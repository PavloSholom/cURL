<?php

	setcookie('id','100');
	setcookie('first_name','David');
	setcookie('last_name','Kuzava');
	setcookie('phone','0996357412');
		
	if ($_POST['button_send'] != "" && $_POST['button_send'] == 'button_send'){   
		
		if ($_POST['method'] == 'GET') {
			if ($curl = curl_init()) {				
				$fields = 'user_id=12&name=Jim&age=20';
				$fields = 'user_id=12&name=Jim&age=20';
				$cookies_fields = '';
				$url = $_POST['url'].'?'.$fields.cookies_fields;
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($curl);
				echo $result;
				curl_close($curl);				
			}			
		}
		
		if ($_POST['method'] == 'POST') {
			if ($curl = curl_init()) {				
				$fields = 'user_id=12&name=Jim&age=20';
				$cookies_fields = '';
				curl_setopt($curl, CURLOPT_URL, $_POST['url']);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $fields.$cookies_fields);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($curl);
				curl_close($curl);		
			}			
		}
		
		exit;
	}

	if ($_GET['cookie_list'] != "" && $_GET['cookie_list'] == 'cookie_list'){
		$item = "";		
		foreach($_COOKIE as $key => $value) {
		  $item .=
		  "<option value='$key'>$value</option>";		
		}
		echo json_encode($item);
		exit;
	}
?>
