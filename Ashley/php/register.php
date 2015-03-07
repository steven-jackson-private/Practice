<?php


require_once('recaptchalib.php');
$resp = recaptcha_check_answer ("6Lew1uESAAAAAElHL5NhyWzNcS1rxTGrl4k_kPJ0",$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
if(!$resp->is_valid)
{
	setmsg("Incorrect reCAPTCHA!");
	return;
}
?>