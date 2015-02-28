<?php
define("BASE_URL","/practice/basic_php_ecommerce/");


//Gets all products in a database
function get_product_list(){
//DB CONN
require ('database-conn.php');

try {
	$results = $conn->query("SELECT product_id, name, price, img FROM PRODUCTS ORDER BY name ASC");


} catch (Exception $e) {
	echo "query failed";
}



//Stores all products to a variable
$products = $results->fetchAll(PDO::FETCH_ASSOC);

return $products;

}

//Get single product information from the product_id

function get_single_product($e){
//DB CONN
require ('database-conn.php');

try {
	$results = $conn->query("SELECT * FROM `products` WHERE `product_id` = '". $e ."';");


} catch (Exception $e) {
	echo "query failed";
}


//Stores a single products to a variable
$products = $results->fetch(PDO::FETCH_ASSOC);

return $products;

}


function get_product_tag($e){
//DB CONN
require ('database-conn.php');

try {
	$results = $conn->query("SELECT * FROM `products` WHERE `tags` = '". $e ."';");


} catch (Exception $e) {
	echo "query failed";
}


//Stores a single products to a variable
$products = $results->fetchAll(PDO::FETCH_ASSOC);

return $products;

}

function get_product_listing ($page_id) {
$tags = get_product_tag($page_id);

foreach ($tags as $tag) {
?>


<ul>
<li><img src="<?php echo BASE_URL . $tag['img']; ?>" alt="">	</li>
	<li>PRODUCT CODE: <?php echo $tag['product_id']; ?></li>
	<li>PRODUCT NAME: <?php echo $tag['name']; ?></li>
	<li>PRODUCT PRICE: <?php echo $tag['price']; ?></li>
	
	
</ul>
<?php

}// end Foreach
}



function newsletter_signup() {

	echo 'test';
}



















?>
