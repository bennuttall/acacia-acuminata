<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('| ', true, 'right'); bloginfo('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/mcrraspjam-64x64.png" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link href="<?php bloginfo('template_url'); ?>/style.css?v=1.0" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="nav">
    <div class="nav-holder">
    <?php wp_nav_menu(array('theme_location' => 'nav_bar', 'container' => false)); ?>
    <?php get_search_form(); ?>
    </div>
</nav>
<header id="header">
    <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
    <em><?php bloginfo('description'); ?></em>
</header>
<div id="main">
