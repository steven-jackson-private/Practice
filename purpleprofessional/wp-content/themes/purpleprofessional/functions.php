<?php 

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support( 'post-thumbnails' );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$args = array(
		'name'          => __( 'Left Hand Sidebar' ),
		'id'            => 'left-sidebar',
		'description'   => 'sidebar',
		'class'         => 'art-box-body art-vmenublockcontent-body art-bar art-vmenublockheader',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle t">',
		'after_title'   => '</h3>'
	);

	register_sidebar( $args );




 ?>