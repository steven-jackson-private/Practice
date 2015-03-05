<?php
//Add theme support
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'custom_size', 150, 149, true );

//Register menu
function register_theme_menus(){

	register_nav_menus( 
		array(
			'primary_menu' => __('Primary Menu'),
			'footer_menu' => __('Footer Menu')
			)
		);
}

add_action('init', 'register_theme_menus'); //End style hook


 //Enqueue Styles
function nova_enqueue_styles() {
	
wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Fjalla+One);');
wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap-responsive.min', get_template_directory_uri() . '/css/bootstrap-responsive.min.css');
wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
wp_enqueue_style( 'docs', get_template_directory_uri() . '/css/docs.css');
wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_style( 'prettify', get_template_directory_uri() . '/css/prettify.css');
wp_enqueue_style( 'sl-slide', get_template_directory_uri() . '/css/sl-slide.css');
wp_enqueue_style( 'variables', get_template_directory_uri() . '/css/variables.css');
wp_enqueue_style( 'mixins', get_template_directory_uri() . '/css/mixins.css');
}

add_action( 'wp_enqueue_scripts', 'nova_enqueue_styles' ); //End style hook


function nova_enqueue_scripts() {

//enqueue script in header
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array('jquery'), '', false);

//enqueue script in before closing body tag
wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js' , array('jquery'), '', true);

wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js' , array('jquery'), '', true);
wp_enqueue_script( 'jquery_ba', get_template_directory_uri() . '/js/jquery.ba-cond.min.js', array('jquery'), '', true);
// wp_enqueue_script( 'slitslider', get_template_directory_uri() . '/js/jquery.slitslider.js', array('jquery'), '', true);
// wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js');
 }


add_action( 'wp_enqueue_scripts', 'nova_enqueue_scripts' ); //End js hook























?>