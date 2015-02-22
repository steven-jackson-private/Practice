<?php get_header(); ?>
             
              <?php get_sidebar();?>                   	
            <?php while (have_posts()) : the_post(); ?>          
                      <div class="art-layout-cell art-content">
    <div class="art-box art-post">
        <div class="art-box-body art-post-body">
            <div class="art-post-inner art-article">
                <h2 class="art-postheader"><span class="art-postheadericon"><?php the_title( );?></span></h2>
              
                <div class="art-postcontent">
                
                <?php the_content( );?>
            </div>

            <?php endwhile?>
               
  

<?php get_footer(); ?>