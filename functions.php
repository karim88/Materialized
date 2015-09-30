<?php

/**
* Function for loading stylesheet & scripts
* @return null
*/
function wp_resources()
{
  wp_enqueue_style('materialized', get_stylesheet_uri());
  wp_enqueue_style('materializecss', get_template_directory_uri() . '/css/materialize.min.css', array(), '20150903');
  wp_enqueue_style('materializeicons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '20150929');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '20150903');

  wp_enqueue_script('jquery1', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), '20150903', true);
  wp_enqueue_script('materializejs', get_template_directory_uri() . '/js/materialize.min.js', array(), '20150903', true);
  wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.js', array(), '20150928', true);
  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '20150903', true);
}

/**
* Fonction to make a new excerpt length
* @return string
*/
function new_excerpt_length()
{
  return 25;
}

/**
* Fonction for make excerpt clickable ;)
* @return string
*/
function new_excerpt_more() {
	//return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'materialized' ) . '</a>';
  return '  ...';
}

/**
* Function to Setup materialized
* @return null
*/
function Materialized_setup()
{
  //Navigation menus
  register_nav_menus(array(
    'primary' => __('Top Main navigation', 'materialized'),
    'footer' => __('Pages in the footer', 'materialized')
  ));
  //Featured Images support
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'small-thimbnails', 200, 400, false );
  add_image_size( 'banner-thumbnails', 1000, 400, false );

  //Post format support
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'status', 'audio', 'chat']);
}

/**
* Function to resize embeded videos
* @return array
*/
function modify_embed_defaults() {
    return array(
        'width'  => 450,
        'height' => 375
    );
}

function set_first_as_featured($attachment_ID){
    $post_ID = get_post($attachment_ID)->post_parent;
    if(!has_post_thumbnail($post_ID)){
        set_post_thumbnail($post_ID, $attachment_ID);
    }
}

add_action('add_attachment', 'set_first_as_featured');
add_action('edit_attachment', 'set_first_as_featured');

/**
* Function that remove links in images
* @return null
*/
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    update_option('image_default_link_type', 'none');
}

//Filters
add_filter( 'embed_defaults', 'modify_embed_defaults' );
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'excerpt_length', 'new_excerpt_length' );
//Actions
add_action( 'after_setup_theme','Materialized_setup');
add_action('wp_enqueue_scripts', 'wp_resources');
add_action('admin_init', 'wpb_imagelink_setup', 10);

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-content\" id=\"\">\n";
  }
}
