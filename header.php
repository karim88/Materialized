<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:image" content="http://gabrielecirulli.github.io/2048/meta/og_image.png"/>

  	<meta name="name" content="<?php bloginfo('name'); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>">
  	<meta name="keywords" content="5x5game, game, puzzle, karim oulad chalha, herr.linux88, firefox os, 2048 like">
  	<meta name="robots" content="index, follow">
  	<meta name="copyright" content="Karim Oulad Chalha 2014-2015">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <nav>
        <div class="blue navbar-fixed nav-wrapper">
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="hide-on-med-and-down">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'walker'         => new My_Walker_Nav_Menu(),
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ));
            ?>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'walker'         => new My_Walker_Nav_Menu(),
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul><li><a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" width="32" />
              </a></li>',
            ));
            ?>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col m8 s12">
          <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" />
          </a>
        </div>
        <div class="col m4 s12">
          <?php get_search_form(  ); ?>
        </div>
      </div>
    </header>
    <div class="row">
