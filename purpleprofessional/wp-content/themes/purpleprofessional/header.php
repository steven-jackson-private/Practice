<!DOCTYPE html>

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php bloginfo('title');?></title>



    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

  <?php wp_head();?>

</head>
<body>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-headerobject"></div>
                <div class="art-logo">
                                 <h1 class="art-logo-name"><?php bloginfo('name');?></h1>
                                                 <h2 class="art-logo-text"><?php bloginfo('description');?></h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">


	<?php    /**
        * Displays a navigation menu
        * @param array $args Arguments
        */
        $args = array(
            'theme_location' => '',
            'menu' => '',
            'container' => 'div',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'art-hmenu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        );
    
        wp_nav_menu( $args );?>
        
</div>
</div>
</div>
</div>