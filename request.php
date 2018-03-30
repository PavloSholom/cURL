<?php
	session_start();
	$_SESSION['test'] = 'test';
	$_SESSION['basket'] = 'Кош  ик';
	$_SESSION['time'] = date("H:i:s");

	setcookie('id','100');
	setcookie('first_name','David');
	setcookie('last_name','Kuzava');
	setcookie('phone','0996357412');


	if ($_POST['button_send'] != "" && $_POST['button_send'] == 'button_send'){

		if ($_POST['method'] == 'GET') {
			if ($curl = curl_init()) {
				$fields = $_POST['fields'];
				$cookies_fields = $_POST['cookies_fields'];
				$session_fields = $_POST['session_fields'];

				$url = $_POST['url'].'?'.$cookies_fields.$session_fields;
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($curl);
				echo $result;
				curl_close($curl);
			}
		}

		if ($_POST['method'] == 'POST') {
			if ($curl = curl_init()) {
				$fields = $_POST['fields'];
				$cookies_fields = $_POST['cookies_fields'];
				$session_fields = $_POST['session_fields'];
				curl_setopt($curl, CURLOPT_URL, $_POST['url']);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($curl);
				echo $result;
				curl_close($curl);
			}
		}

		exit;
	}

	if ($_GET['cookie_list'] != "" && $_GET['cookie_list'] == 'cookie_list'){
		$result = [];
		$item = "";
		foreach($_COOKIE as $key => $value) {
		  $item .=
		  "<option value='$key'>$value</option>";
		}
		$result[] = '#cookie_list';
		$result[] = $item;
	 	echo json_encode($result);
		exit;
	}

	if ($_GET['session_list'] != "" && $_GET['session_list'] == 'session_list'){
		$result = [];
		$item = "";
		foreach($_SESSION as $key => $value) {
			$item .=
			"<option value='$key'>$value</option>";
		}
		$result[] = '#session_list';
		$result[] = $item;
		echo json_encode($result);
		exit;
	}
?>
