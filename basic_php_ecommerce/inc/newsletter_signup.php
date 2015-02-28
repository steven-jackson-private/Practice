<?php 
include ('functions.php');
require ('database-conn.php');


$name = $_GET["name"];
$email = $_GET["email"];

try {
	
	$results = $conn->query("INSERT INTO newsletter VALUES (\"" . $name . "\",\"" .  $email . "\");");


} catch (Exception $e) {
	echo "query failed";
}


header ("Location: " . BASE_URL . '/index.php');


?>