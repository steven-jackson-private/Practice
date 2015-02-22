<?php get_header(); ?>
             
              <?php get_sidebar();?>                   	
            <?php while (have_posts()) : the_post(); ?>          
                      <div class="art-layout-cell art-content">
    <div class="art-box art-post">
        <div class="art-box-body art-post-body">
            <div class="art-post-inner art-article">
                <h2 class="art-postheader"><span class="art-postheadericon"><?php the_title( );?></span></h2>
                <div class="art-postheadericons art-metadata-icons">
                    <span class="art-postdateicon"><?php the_date();?></span> | <span class="art-postauthoricon">Author <a href="<?php the_permalink();?>" title="Posts by Admin"><?php the_author();?></a></span> | <span class="art-postemailicon"></span> | <span class="art-postediticon"><a href="#" title="Edit">Edit</a></span>
                </div>
                <div class="art-postcontent">
                <?php   the_post_thumbnail(); ?>
                    <p><?php the_content('<br/><br/>Read more' );?></p>

                           </div>
                           <div class="cleared"></div>
                           <div class="art-postfootericons art-metadata-icons">
                            <span class="art-posttagicon">Tags: <a href="#" title="link">link</a>, <a href="#" title="visited link" class="visited">visited</a>, <a href="#" title="hovered link" class="hover">hovered</a></span> | <span class="art-postcommentsicon"><a href="#" title="Comments">No Comments »</a></span>
                        </div>
                    </div>

                    <div class="cleared"></div>
                </div>
            </div>

            <?php endwhile?>
               
  <?php comments_template( );?>

<?php get_footer(); ?>