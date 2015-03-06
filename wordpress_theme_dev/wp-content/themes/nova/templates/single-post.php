<?php get_header(); ?>

<?php while (have_posts()) : the_post();



	?> 

	<?php get_template_part( 'templates/title', 'page' );?>

	<section id="portfolio" class="container main">  
single-post.php
		<?php 
		the_post_thumbnail('full' );
		the_content( );?>

<?php previous_post_link( );?>
<a href="<?php bloginfo('url' );?>/portfolio"> | Portfolio | </a>
<?php next_post_link( );?>

	</section>

<?php endwhile;?> 


<?php get_footer(); ?>