<?php 
/*
Template name: Movies

*/ 
get_header(); ?>
             

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Movies</h1>
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


<?php 
//Register post type
	$args = array(
		
		'post_type' => 'my_movies'
		
	);

$mymovies = new WP_Query( $args );
?>

  <?php while ($mymovies->have_posts()) : $mymovies->the_post(); ?> 
<p>
<?php the_title( );?>
	<?php the_post_thumbnail('thumbnail');?>

</p>


  <?php endwhile;?>


               
  

<?php get_footer(); ?>