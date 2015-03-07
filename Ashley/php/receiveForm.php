<?php
define ( "DATA_PATH", "../contact_data/" );
define ( "SERVER_PATH", "http://ecowatt.co.za/login/" );

$to = explode ( ",", "sales@ecowatt.co.za" );
// $to = array (
// 		"john.wella@gmail.com" 
// );

error_reporting ( E_ALL );
ini_set ( 'display_errors', 0 );

// I use this to make sure the user has entered a recapcha
// session_start ();
// if ($_SESSION ['s'] != "OK") {
// header ( "Location: ../contact.php?msg=You need to re-enter the Recapcha " );
// return;
// }

// unset ( $_SESSION ['s'] );
$target_path = null;
$fileName = date ( 'ymd_his_' ) . basename ( $_POST ['name'] );

$name = $_POST ['name'];
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$region = $_POST ['region'];
$areas = $_POST ['selectedAreas'];
$msg = $_POST ['msg'];

if (substr ( $areas, - 1 ) == ",") {
	$areas = substr ( $areas, 0, - 1 );
}

$html = file_get_contents ( "contact_details.html" );
$html = str_replace ( "{NAME}", $name, $html );
$html = str_replace ( "{EMAIL}", $email, $html );
$html = str_replace ( "{TEL}", $tel, $html );
$html = str_replace ( "{REGION}", $region, $html );
$html = str_replace ( "{AREAS}", $areas, $html );
$html = str_replace ( "{MSG}", $msg, $html );

// return;

file_put_contents ( DATA_PATH . $fileName . ".html", $html );
send_mail ( $to, $html, $target_path );

header ( "Location: ../?sub=ty" );

userEmail ( $email );
function send_mail($to, $html_message, $fpath = null, $subject = null) {
	if ($subject == null)
		$subject = 'Ecowatt Contact Form - ' . date ( "Y-m-d H:i:s" );
	
	require_once ('swift/swift_required.php');
	$mailer = new Swift_Mailer ( new Swift_MailTransport () );
	$message = Swift_Message::newInstance ()->setTo ( $to )->setSubject ( $subject )->setReplyTo ( 'sales@ecowatt.co.za' )->setFrom ( array (
			'sales@ecowatt.co.za' => 'Ecowatt Contact' 
	) )->setBody ( $html_message, 'text/html' );
	
	if ($fpath != null)
		$message->attach ( Swift_Attachment::fromPath ( $fpath ) );
	
	return ($mailer->send ( $message ));
}
function userEmail($userEmail) {
	$html = file_get_contents ( "contact_email.html" );
	send_mail ( $userEmail, $html, null, "Ecowatt Team - Automatic reply" );
}
?>