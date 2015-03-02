
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php the_title()?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    
    

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-57-precomposed.png">
 
 <?php wp_head()?>
</head>


<body <?php body_class();?>>


    <!--Header-->
    <header class="navbar navbar-fixed-top" style="margin-top:20px;">

        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo home_url( );?>"></a>
                test
                
                 
                
                  <?php    
        /**
        * Displays a navigation menu
        * @param array $args Arguments
        */
        $args = array(
            'theme_location' => 'primary_menu',
            'menu' => 'Primary Menu',
            'container' => 'div',
            'container_class' => 'nav-collapse collapse pull-right',
            'container_id' => 'main_menu',
            'menu_class' => 'nav'
 
        );
    wp_nav_menu( $args );
        ?>

    </header>
    <!-- /header -->

   




