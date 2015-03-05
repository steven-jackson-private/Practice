<?php 
/*
Template name: Portfolio

*/ 
get_header(); ?>

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
    

   <section id="portfolio" class="container main">    
        <ul class="gallery col-4">


<?php 
//Register post type
	$args = array(
		
		'post_type' => 'portfolio_items',
		'order' => 'ASC'

		
	);

$portfolio = new WP_Query( $args );
?>

  <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?> 

            <li>
                <div class="preview">
                    <?php the_post_thumbnail(array(300,180));?>
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="<?php the_permalink();?>"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5><?php the_title( );?></h5>
                    <small><?php the_content( );?></small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                       <?php the_post_thumbnail('full'); the_content( );?>

                    </div>
                </div>                 
            </li>


  <?php endwhile;?>
<?php wp_reset_postdata();?>



 <?php 
//Duplicated custom post instead of re-adding portfolio items
	$args = array(
		
		'post_type' => 'portfolio_items',
		'order' => 'ASC'

		
	);

$portfolio = new WP_Query( $args );
?>

  <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?> 

            <li>
                <div class="preview">
                    <?php the_post_thumbnail(array(300,180));?>
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="<?php the_permalink();?>"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5><?php the_title( );?></h5>
                    <small><?php the_content( );?></small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                       <?php the_post_thumbnail('full'); the_content( );?>

                    </div>
                </div>                 
            </li>


  <?php endwhile;?>
  <?php wp_reset_postdata();?>
 

        </ul>
        </section>
  

<?php get_footer(); ?>