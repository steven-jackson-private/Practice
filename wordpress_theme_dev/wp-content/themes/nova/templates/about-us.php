
<?php 
/*
Template Name: About us
 */
get_header(); ?>
             
            
<?php get_template_part( 'templates/title', 'page' );?>

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span6">
                <h2>What we are</h2>
                <?php while (have_posts()) : the_post(); ?>     

    <p><?php the_content( );?></p>
        
            <?php endwhile?>
               
            </div>
            <div class="span6">
                <h2>Our Skills</h2>
                <div>
                    <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">Wordpress</div></div>
                    <div class="progress progress-warning"><div class="bar" style="width: 70%; text-align:left; padding-left:10px;">Joomla</div></div>
                    <div class="progress progress-info"><div class="bar" style="width: 60%; text-align:left; padding-left:10px;">Drupal</div></div>
                    <div class="progress progress-danger"><div class="bar" style="width: 90%; text-align:left; padding-left:10px;">Magento</div></div>
                </div>
            </div>
        </div>

        <hr>

<!-- Custom post type -->
        <!-- Meet the team -->

        <h1 class="center">Meet the Team</h1>

        <hr>
<div class="row-fluid">

<?php 
//Register post type
  $args = array(
    
    'post_type' => 'team',
    'order' => 'ASC'
    
  );

$teams = new WP_Query( $args );
?>

  <?php while ($teams->have_posts()) : $teams->the_post(); ?> 



        
            <div class="span3">
                <div class="box">
                    <p>  <?php  the_post_thumbnail('full');?></p>
                    <h5><?php the_field('name');?></h5>
                    <p><?php the_field('description');?></p>

                    <!-- Add conditional post type for social media icons -->
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>




  <?php endwhile;?>



            
        </div>
        <p>&nbsp;</p>
        <p></p>
        <hr>

        <div class="row-fluid">
            <div class="span6">
                <h3>Why Choose Us?</h3>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
            <div class="span6">
                <h3>Our Services</h3>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          Professional Web Design
                      </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua.
                  </div>
              </div>
          </div>
          <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  Premium Wordpress Themes
              </a>
          </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
      </div>
  </div>
  <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
          PSD2XHTML Conversion
      </a>
  </div>
  <div id="collapseThree" class="accordion-body collapse">
    <div class="accordion-inner">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
    	
               
  

<?php get_footer(); ?>