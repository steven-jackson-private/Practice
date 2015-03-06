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
<a href="<?php bloginfo('url' );?>/blog"> | Blog page | </a>
<?php next_post_link( );?>

<ol class="commentlist">
	<?php
		//Gather comments for a specific page/post 
		$comments = get_comments(array(
			'post_id' => XXX,
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		//Display the list of comments
		wp_list_comments(array(
			'per_page' => 10, //Allow comment pagination
			'reverse_top_level' => false //Show the latest comments at the top of the list
		), $comments);
	?>
</ol>

<?php 

wp_list_comments( );

$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Submit Comment' ),
  'format'            => 'xhtml',

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
    '</p>',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);


comment_form($args);?>
	</section>

<?php endwhile;?> 


<?php get_footer(); ?>