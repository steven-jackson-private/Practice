<?php get_header(); ?>
             
                          	
            <?php while (have_posts()) : the_post(); ?>          
                  
           <?php get_template_part( 'templates/title', 'page' );?>  



<div class="container">

                <?php the_content( );?>
           
page.php


            <?php endwhile?>

            </div>
               
  

<?php get_footer(); ?>