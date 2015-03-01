<?php 

include('inc/header.php');
include('inc/functions.php');


if (isset ($_GET["id"])){

	$page_id = $_GET["id"];
}

if (isset ($_GET["results"])){

	$page_id_search = $_GET["results"];
	
}


if (empty ($page_id)) {
	header ("Location: " . BASE_URL . '/index.php');
}




?>
<!-- Content -->
<div id="content">

<div class="row">	

	<?php 
//Conditional Determined from Page ID

//Function for page listing using Page ID
	if ($page_id == 'boys') {
		get_product_listing ($page_id);

	} else if ($page_id == 'girls') {
		get_product_listing ($page_id);


	} else if ($page_id == 'common') {

		get_product_listing ($page_id);

	} else if ($page_id == 'search') {
	
	?>
	<ul>
 	<?php
	$search_array = search($page_id_search);
	search_results ($search_array );
	?>
	</ul>

	
	<?php	}

	else {
		//Get single product from  get_single_product() function
		$single_product = get_single_product($page_id);

		?>


		<ul>
			<li><img src="<?php echo BASE_URL . $single_product['img']; ?>" alt="">	</li>
			<li>PRODUCT CODE: <?php echo $single_product['product_id']; ?></li>
			<li>PRODUCT NAME: <?php echo $single_product['name']; ?></li>
			<li>PRODUCT PRICE: <?php echo $single_product['price']; ?></li>
			<li>PRODUCT Description: <br><br><?php echo $single_product['description']; ?></li>

		</ul>
		<?php

	}

	?>


</div>
</div>
</div>

<div id="footer-push" class="cl">&nbsp;</div>

	<?php include('inc/footer.php'); ?>