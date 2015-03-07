<?php include('functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/leaf-logo.png" type="image/png" sizes="10x10">

	<title>Automatically shed loads</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/landing-page.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">

	<!-- Custom Fonts -->


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body onload="hide_contents(), preset()">

    	<!-- Navigation -->
    	<nav class="navbar navbar-default navbar-fixed-top ecobar" role="navigation">
    		<div class="container">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header login">

    				<a href="index.php"><img src="img/ecowatt-logo.png" class="img-responsive " alt="Responsive image"></a>
    			</div>

    			<!-- Collect the nav links, forms, and other content for toggling -->

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    				<div class="dropdown pull-right contact-nav">
    					<a id="dLabel" class="hovercolour" role="button" href="contact.php">
    						Contact</a>

    					</div>
    					<div class="dropdown pull-right products-nav">
    						<a id="dLabel" class="hovercolour" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
    							Products & Solutions <span class="caret"></span></a>
    							<ul class="dropdown-menu product-list2" role="menu" aria-labelledby="dLabel">
    								<li><a href="energy_monitoring.php">Energy Monitoring</a></li>
    								<li><a href="daylight_harvest.php">Daylight Harvesting</a></li>
    								<li><a href="wireless_control.php">Wireless Control</a></li>
    								<li><a href="schedule.php">Scheduling</a></li>
    								<li><a href="priority_switching.php">Priority Switching</a></li>
    								<li><a href="geyser_control.php">Geyser Control</a></li>
    								<li><a href="temperature.php">Temperature Monitor</a></li>
    								<li><a href="hardware_overview.php">Hardware Overview</a></li>
    							</ul>
    						</div>
    						<div class="dropdown pull-right contact-nav" style="">
    							<a id="dLabel" class="hovercolour" role="button" href="index.php">
    								Home</a>
    							</div>
    						</div>
    					</div>
    					<!-- /.container -->
    				</nav>
    				<!-- /.navbar-collapse -->

    				<div class="intro-header hardware-header">

    					<div class="container">

    						<button onclick="myAjax()">Click me</button>

    						<div class="row">
    							<div class="col-lg-5 col-sm-6">
    								<div class="clearfix"></div>
    								<h2 class="section-heading hb">Hardware Overview</h2>
    								<p class="lead">Below you'll find all the hardware required for effective energy management.</p>
    							</div>

    						</div>

    					</div>
    					<!-- /.container -->

    				</div>
    				<!-- /.intro-header .wireless-header -->



    				<div class="content-section-a">

    					<div class="container">
    						<div class="row pad">
    							<div class="col-lg-12">
    								<table class="tbbig">
    									<tr>
    										<td>
    											<img src="img/leaf-logo.png" alt="ecowatt logo leaf">
    										</td>
    										<td>
    											<hr class="vrline">
    										</td>
    										<td>
    											<h3 class="align">We have developed a range of energy management devices. These are powered radio devices 
    												that communicate to and from the Cloud Hub. The system allows the user to control, schedule 
    												and monitor a multitude of devices such as lighting, appliances and air-conditioning etc. via a 
    												web interface.</h3>
    											</td>
    										</tr>
    									</table>
    								</div>
    							</div>

    						</div>


    						<!-- /.container -->

    					</div>
    					<!-- /.content-section-a -->

    					<div class="content-section-b">

    						<div class="container">
    							<div class="row">
    								<div class="col-lg-6">
    									<h3>Please select an option:</h3>
    								</div>

    								<div class="col-lg-6 rdbtn_pad">
    									<select class="lease-select">
    										<option>Lease</option>
    										<option>3 Months</option>
    										<option>12 Months</option>
    										<option>24 Months</option>
    									</select>
    									<div class="pull-right" id="rdbtn">
		  <!--<input type="radio" name="rdb" value="col1" onclick="check()" id="mycheck">3 Months
		  <input type="radio" name="rdb" value="col2" onclick="check()">12 Months
		  <input type="radio" name="rdb" value="col3" onclick="check()">24 Months-->
		  <input type="radio" name="rdb" value="col4" onclick="check()">Purchase
		</div>
	</div>
</div>

<div class="row">
	<table class="product_table" id="product_table">
		<?php
		genTable ();
		$products_list = genTable();

		//Test code
		//var_dump($products_list);

		echo json_encode($products_list);
		?>


	</table>

</div>
</div>

<button>test</button>
</div>

<div class="container">
	<div class="row">

		<div class="col-lg-4">
			<div class="outline_details">
				<div class="invoicetxt">Invoice Details</div>
				<table class="details_table" id="tb_details">
					<tr><td colspan="2" id="msg"></td>
					</tr>
					<tr>

						<td>Name:</td>
						<td><input id="name" type="text"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input id="email" type="text"></td>
					</tr>
					<tr>
						<td>Contact Number:</td>
						<td><input id="number" type="text"></td>
					</tr>
					<tr>
						<td>Street Address:</td>
						<td><input id="streetadress" type="text"></td>
					</tr>
					<tr>
						<td>Suburb:</td>
						<td><input id="suburbadress" type="text"></td>
					</tr>
					<tr>
						<td>City/Town:</td>
						<td><input type="text" id="cityadress"></td>
					</tr>
					<tr>
						<td>Post Code:</td>
						<td><input type="text" id="postadress"></td>
					</tr>
				</table>  
			</div>
		</div>
		

		<div class="col-lg-4">
			<div class="outline_details">
				<div class="invoicetxt">Delivery Details</div>
				<table class="delivery_details" id="tb_delivery">
					<tr>
						<td>Special Delivery Instructions:</td>
						<td><input type="text" id="instructions"></td>
					</tr>
					<tr>
						<td>Delivery Contact Name:</td>
						<td><input type="text" id="cp_name"></td>
					</tr>
					<tr>
						<td>Delivery Contact Number:</td>
						<td><input type="text" id="cp_num"></td>
					</tr>
					<tr class="spacing_tr"><td></td><td></td></tr>
					<tr>
						<td>Company Name:</td>
						<td><input type="text" id="company_name"></td>
					</tr>
					<tr>
						<td>Company VAT #:</td>
						<td><input type="text" id="company_vat"></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="outline_details">
				<div class="invoicetxt">Place Order</div>
				<table class="total_table" id="tbl_total">
					<tr>
						<td>Total goods Ex.VAT:</td>
						<td class="total_td" id="cost">R0.00</td>
					</tr>
					<tr>
						<td>Discount Ex.VAT:</td>
						<td id="disc">R0.00</td>
					</tr>
					<tr>
						<td>Delivery Ex.VAT:</td>
						<td id="delivery">R0.00</td>
					</tr>
					<tr>
						<td>Grand Total:</td>
						<td class="totals"><span id="grnd_total">R0.00</span></td>
					</tr>
					<tr class="spacing_tr"></tr>
					<tr>
						<td>Deliver:</td>
						<td><input name="deliver" type="radio" id="deliver_input"
							checked="checked" onclick="total();" /></td>
						</tr>
						<tr>
							<td>Collect in Montague Gardens:</td>
							<td><input name="deliver" type="radio" id="deliver_input" onclick="total();"></td>
						</tr>
						<tr class="spacing_tr"><td></td><td></td></tr>
						<tr>
							<td>Coupon/Rep Code:</td>
							<td><input type="text" id="coupon" onchange="clearDiscount(); total();"></td>
						</tr>
						<tr id="verify_tr" class="hidden">
							<td id="verify">Verifying code...</td>
							<td><img id="status_img" src="img/load.gif" alt="load logo"></img></td>
						</tr>
						<tr class="spacing_tr"><td></td><td></td></tr>
						<tr>
							<td><button class="clearbtn" onclick="clearAll()">Clear Order</button></td>
							<td><button class="quotebtn" onclick="request(this);quantity()">Create Quote</button></td>
							<td><button class="quotebtn" onclick="amount()">test</button></td>
							<!--<td><button class="quotebtn" onclick="getDetails();">Collect</button></td>-->
						</tr>
					</table>
				</div>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright text-muted small text-center" style="padding-bottom: 20px;">E&OE</p>
			</div>
		</div>
		<!-- /.container -->
	</div>
</div>
<div class="banner">

	<div class="container">

		<div class="row">
			<div class="col-lg-6">

			</div>
			<div class="col-lg-6">

			</div>
		</div>

	</div>
	<!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
	<div class="col-lg-2 text-center">
		<img class="img-responsive" src="img/footer_snippet.png" alt="">
		<a class="hoverLink" href="pdf/GBCSA Membership Certificate 2014.pdf" target=_blank >Download our membership certificate.</a>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-lg-9">
				<p class="text-center">Ecowatt solutions are custom designed to fit your needs.</p>

				<p class="copyright text-muted small text-center" >Copyright &copy; Ecowatt <?php echo date(Y)?>. All Rights Reserved</p>
			</div>
		</div>
	</div>

	
</footer>

      <!--<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-46059528-1', 'ecowatt.co.za');
	  ga('send', 'pageview');
	</script>-->

	<!-- Json array pass -->



	<!-- jQuery Version 1.11.0 -->
	<script src="js/jquery-1.11.0.js"></script>


	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/product_cart.js"></script>


</body>

</html>
