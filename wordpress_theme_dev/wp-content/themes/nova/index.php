
<?php get_header(); ?>

<section class="title">
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h1><?php echo ucfirst(get_the_title());?></h1>
				</div>
				<div class="span6">
					<ul class="breadcrumb pull-right">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>



<?php get_footer();?>