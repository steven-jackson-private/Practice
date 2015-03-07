<?php
require_once ('recaptchalib.php');
$resp = recaptcha_check_answer ( "6LfMg-8SAAAAAEAZbfHOTF3L4n_WUxieij6KmzeO", $_SERVER ["REMOTE_ADDR"], $_GET ['c'], $_GET ['a'] );

if(!$resp->is_valid)
	{
		echo "#fail";
	}else{
		session_start();		
		$_SESSION['s'] = "OK";
		echo "#GOOD";
	}
?>