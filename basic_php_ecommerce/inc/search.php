<?php 
include ('functions.php');
require ('database-conn.php');



$search = $_GET["search"];
header ("location: ". BASE_URL . "/single.php?id=search&results=". $search)



?>