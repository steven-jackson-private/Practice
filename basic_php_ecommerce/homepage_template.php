<!-- Slider -->
<div id="main-slider">
	<div id="slider-holder">
		<ul>
			<li>
				<img src="images/slider-image-1.jpg" alt="Slider Image 1" />
				<div class="cnt">
					<h4>Vestibulum rhoncus ultrices elementum</h4>
					<h2>Suspendisse non sem tellus</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla mattis nisl, sit amet tincidunt.</p>
					<span class="price"><span class="dollar">$</span> 1599<span class="sub-text">.99</span></span>
					<a href="#" class="btn notext" title="Order Now">Order Now</a>
					<div class="cl">&nbsp;</div>
				</div>
			</li>
			<li>
				<img src="images/slider-image-1.jpg" alt="Slider Image 1" />
				<div class="cnt">
					<h4>Vestibulum rhoncus ultrices elementum</h4>
					<h2>Suspendisse non sem tellus</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla mattis nisl, sit amet tincidunt.</p>
					<span class="price"><span class="dollar">$</span> 1599<span class="sub-text">.99</span></span>
					<a href="#" class="btn notext" title="Order Now">Order Now</a>
					<div class="cl">&nbsp;</div>
				</div>
			</li>
			<li>
				<img src="images/slider-image-1.jpg" alt="Slider Image 1" />
				<div class="cnt">
					<h4>Vestibulum rhoncus ultrices elementum</h4>
					<h2>Suspendisse non sem tellus</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla mattis nisl, sit amet tincidunt.</p>
					<span class="price"><span class="dollar">$</span> 1599<span class="sub-text">.99</span></span>
					<a href="#" class="btn notext" title="Order Now">Order Now</a>
					<div class="cl">&nbsp;</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="nav">
		<a href="#" title="First Slide">&nbsp;</a>
		<a href="#" title="Second Slide">&nbsp;</a>
		<a href="#" title="Third Slide">&nbsp;</a>
	</div>
</div>
<!-- End Slider -->
<!-- Content -->
<div id="content">
	<!-- Case -->
	<div class="case">
		<h3>newest</h3>

		<?php include('inc/functions.php');
		$products = get_product_list();
		?>
		<!-- Row -->
		<div class="row">
			<ul>
				<!-- Looping first set of products to li -->
				<?php 


				$count = 0;
				foreach ($products as $product){
					

					// Product listing Contional
					if ($count < 3) {
						?>

						<li>
							<a href="single.php?id=<?php echo $product['product_id']; ?>" class="product" title="Product 2">
								<img src="<?php echo  BASE_URL . $product['img']; ?>" alt="<?php echo $product['name']; ?>" />
								<span class="order model"><?php echo $product['name']; ?></span>
								<span class="order">catalog number: <span class="number"><?php echo $product['product_id']; ?></span></span>
								<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span><?php echo $product['price']; ?></span></span>
							</a>	
							<?php echo $count; ?>
						</li>

						<?php 	
						//TODO: Fix
						//condtional to add classes and div's
						$add_div = $count +1; 
						if ($add_div  > 3  ) {
							echo $add_div;
							echo '</ul><div class="cl">&nbsp;</div></div><!-- End Row --><!-- Row --><div class="row last-row"><ul>';
						}

						
						$count =  $count +1;

						} // end if  

						elseif ($count < 8){
							?>


							<li>
								<a href="single.php?id=<?php echo $product['product_id']; ?>" class="product" title="Product 2">
									<img src="<?php echo  BASE_URL . $product['img']; ?>" alt="<?php echo $product['name']; ?>" />
									<span class="order model"><?php echo $product['name']; ?></span>
									<span class="order">catalog number: <span class="number"><?php echo $product['product_id']; ?></span></span>
									<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span><?php echo $product['price']; ?></span></span>
								</a>	
								<?php echo $count; ?>
							</li>


				<?php 
				$count =  $count +1;
				} //end else if
				} //end of foreach 

				?>

				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Row -->

			<!-- Row -->
			
		</div>
		<!-- End Case -->
		<!-- Case -->
		<div class="case">
			<h3>Bestsellers</h3>
			<!-- Products Slider -->
			<div class="products-slider">
				<div class="slider-holder">
					<ul>



						<?php 

						foreach ($products as $product){


					//TODO: Fix to search by Bestseller Tag

							?>

							<li>
								<a href="single.php?id=<?php echo $product['product_id']; ?>" class="product" title="Product 2">
									<img src="<?php echo  BASE_URL . $product['img']; ?>" alt="<?php echo $product['name']; ?>" />
									<span class="order model"><?php echo $product['name']; ?></span>
									<span class="order">catalog number: <span class="number"><?php echo $product['product_id']; ?></span></span>
									<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span><?php echo $product['price']; ?></span></span>
								</a>	
								<?php echo $count; ?>
							</li>

							<?php 	}//End carousel products ?>



						</ul>
					</div>
					<div class="nav">
						<a href="#" class="prev" title="Previous">Prev</a>
						<a href="#" class="next" title="Next">Next</a>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				<!-- End Products Slider -->
			</div>
			<!-- End Case -->
		</div>
		<!-- End Content -->
	</div>
	<!-- End Shell -->
</div>
<!-- End Main -->