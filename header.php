<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>

  	<meta name="name" content="<?php bloginfo('name'); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>">
  	<meta name="keywords" content="<?php echo get_option('keywords'); ?>">
    <link rel="author" name="author" href="<?php echo get_option('author'); ?>">
  	<meta name="robots" content="<?php echo get_option('robots'); ?>">
  	<meta name="copyright" content="<?php echo get_option('copyright'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="navbar-fixed">
        <nav>
          <div class="blue nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'walker'         => new My_Walker_Nav_Menu(),
                'items_wrap'     => '<ul id="%1$s" class="hide-on-med-and-down %2$s"><li><a href="'.home_url().'"><i class="material-icons">home</i></a></li>%3$s</ul>',
              ));
              ?>

              <?php
                wp_nav_menu(array(
                'items_wrap'     => '<ul id="mobile-demo" class="side-nav %2$s"><li><a href="'.home_url().'"><i class="material-icons">home</i></a></li>%3$s</ul>',
                'depth'          => 0
              ));
              ?>
          </div>
        </nav>
      </div>
      <div class="row">
        <div class="col m9 s12">
          <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_header_image(); ?>" alt="Head image" class="head_image" />
          </a>
        </div>
        <div class="col m3 s12">
          <?php get_search_form(  ); ?>
        </div>
      </div>
      <?php if(is_home()){ dynamic_sidebar('slider-1');} ?>
    </header>
    <div class="row">
