<?php
include 'functions.php';
define("LOG", "couponLog.shh");
define("COUPON_URL", "../coupons.shh");
header('Access-Control-Allow-Origin: *');

$couponCode = $_GET['c'];

logAccess(LOG, $couponCode);

$arr = file(COUPON_URL);

foreach($arr as $line){
	$lineArr = explode("|", $line);
	if(strpos($lineArr[1], "-")){
		$codeArr = explode("-", $lineArr[1]);
		foreach($codeArr as $code){
			if($code == $couponCode){
				echo $lineArr[0]."|".$lineArr[2];
				return ;
			}
		}
	}else{		
		if($lineArr[1] == $couponCode){
			echo $lineArr[0]."|".$lineArr[2];
			return ;
		}
	}
}
echo "X";

?>