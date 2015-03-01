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

}//end  get_product_list function



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

}//end get_single_product function


function get_product_tag($e){
//DB CONN
	require ('database-conn.php');

	try {
		$results = $conn->query("SELECT * FROM `products` WHERE `tags` = '". $e ."';");


	} catch (Exception $e) {
		echo "query failed";
}//end get_product_tag function


//Stores a single products to a variable
$products = $results->fetchAll(PDO::FETCH_ASSOC);

return $products;

}//end get_product_listing function

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
}//end get_product_listing function




function get_bestseller(){
//DB CONN
	require ('database-conn.php');

	try {
		$results = $conn->query("SELECT * FROM `products` WHERE `bestseller` = 'true';");


	} catch (Exception $e) {
		echo "query failed";
	}


//Stores a single products to a variable
	$products = $results->fetchAll(PDO::FETCH_ASSOC);

	return $products;

}//end get_bestseller function



//Search function

function search ($search){

	require ('database-conn.php');

	try {

		$results = $conn->query("SELECT * FROM `products` WHERE `name` LIKE '". $search . "%'");


	} catch (Exception $e) {
		echo "query failed";
	}


	$products = $results->fetchAll(PDO::FETCH_ASSOC);

	return $products;

}//end search functionsearch



//Getting the search results and displaying it to the page
function search_results ($products) {


//Error handling to determine if a array with at least 1 result has been returned
	if (!count($products) == 0){

		foreach ($products as $product) {
			?>


			<ul>
				<li><img src="<?php echo BASE_URL . $product['img']; ?>" alt="">	</li>
				<li>PRODUCT CODE: <?php echo $product['product_id']; ?></li>
				<li>PRODUCT NAME: <?php echo $product['name']; ?></li>
				<li>PRODUCT PRICE: <?php echo $product['price']; ?></li>


			</ul>
<?php } //end foreach
		} else {
			echo 'There are no valid products';
		}
}//end search_results function






?>