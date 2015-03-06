 <?php 
/*
Template Name: Blog
 */
get_header(); ?>

 <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">

                <?php 
//Register post type
    $args = array(
        
        'post_type' => 'post',
        'order' => 'ASC',
        'posts_per_page' => 3

        
    );

$posts = new WP_Query( $args );
wp_reset_postdata();    
?>
                    
  <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>     

  

    <div class="blog-item well">
                        <a href="<?php the_permalink();?>"><h2><?php the_title(  );?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <?php the_author();?> |  <i class="icon-folder-close"></i>  <?php the_category();?><a href="#">Bootstrap</a> | <i class="icon-calendar"></i> Sept 16th, 2012
                          </p>
                          <p class="pull-right"><i class="icon-comment pull"></i> <a href="<?php the_permalink();?>"><?php comments_number( );?></a></p>
                      </div>
                      <p><?php the_post_thumbnail( 'full');?></p>
                       <p><?php the_content(); ?></p>

                      <a class="btn btn-link" href="<?php the_permalink();?>">Read More <i class="icon-angle-right"></i></a>
                  </div>
                  <!-- End Blog Item -->
        
            <?php  endwhile;?>

              <div class="gap"></div>



<!-- Add the pagination functions here. -->
<div class="pagination">
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>


              <!-- Pagination -->
              <!-- 
                <ul>
                    <li><a href=""><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="<?php next_posts_link( ); ?>">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
             -->


        </div>
    </div>
    <aside class="span4">
        <div class="widget search">
            <form>
                <input type="text" class="input-block-level" placeholder="Search">
            </form>
        </div>
        <!-- /.search -->

        <div class="widget ads">
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="images/ads/ad1.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="images/ads/ad2.png" alt=""></a>
                </div>
            </div>
            <p> </p>
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="images/ads/ad3.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="images/ads/ad4.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- /.ads -->

        <div class="widget widget-popular">
            <h3>Popular Posts</h3>
            <div class="widget-blog-items">
                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

            </div>                        
        </div>
        <!-- End Popular Posts -->        

        <div class="widget">
            <h3>Blog Categories</h3>
            <div>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>

                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Joomla</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Drupal</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>

            </div>                       
        </div>
        <!-- End Category Widget -->

        <div class="widget">
            <h3>Tag Cloud</h3>
            <ul class="tag-cloud unstyled">
                <li><a class="btn btn-mini btn-primary" href="#">CSS3</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">HTML5</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">WordPress</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Joomla</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Drupal</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Bootstrap</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">jQuery</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Tutorial</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Update</a></li>
            </ul>
        </div> 
        <!-- End Tag Cloud Widget -->

        <div class="widget">
            <h3>Archive</h3>
            <ul class="archive arrow">
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
                <li><a href="#">March 2013</a></li>
                <li><a href="#">February 2013</a></li>
            </ul>
        </div> 
        <!-- End Archive Widget -->   

    </aside>
</div>

</section>



<?php get_footer();?>