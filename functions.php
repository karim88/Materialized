<?php

require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/template-tags.php';

/**
* Function for loading stylesheet & scripts
* @return null
*/
function wp_resources()
{
  wp_enqueue_style('materialized-wp', get_stylesheet_uri());
  wp_enqueue_style('materializecss', get_template_directory_uri() . '/css/materialize.min.css', array(), '20150903');
  wp_enqueue_style('materializeicons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '20150929');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '20150903');
  wp_enqueue_script('materializejs', get_template_directory_uri() . '/js/materialize.min.js', array(), '20150903', true);
  wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.js', array(), '20150928', true);
  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '20150903', true);
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

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
	//return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'materialized-wp' ) . '</a>';
  return '  ...';
}

/**
* Function to Setup materialized-wp
* @return null
*/
function materialized_wp_setup()
{
  //Header image
  $image = array(
	'default-image'          => get_template_directory_uri().'/img/logo.png',
	'random-default'         => false,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
  //Navigation menus
  register_nav_menus(array(
    'primary' => __('Top Main navigation', 'materialized-wp'),
    'footer' => __('Pages in the footer', 'materialized-wp')
  ));
  //Featured Images support
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'small-thumbnails', 200, 400, false );
  add_image_size( 'banner-thumbnails', 1000, 400, false );

  //Post format support
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'status', 'audio'));
  add_theme_support('automatic-feed-links');
  add_theme_support( 'title-tag' );
  add_theme_support( "custom-header", $image );
  load_theme_textdomain('materialized-wp', get_template_directory() . '/languages');
}

/**
* Function to resize embeded videos
* @return array
*/
function modify_embed_defaults() {
    return array(
        'width'  => 400,
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


function materialized_wp_widgets_init()
{
  //Sidebar 1
  register_sidebar(array(
    'name' => __('Sidebar', 'materialized-wp'),
    'id' => 'sidebar-1',
    'description' => 'This sidebar are displayed in right, and hided in the small devices',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div><hr class='white'>",
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => "</h4>"
  ));
  register_sidebar(array(
    'name' => __('Footer sidebar', 'materialized-wp'),
    'id' => 'sidebar-2',
    'description' => __('This sidebar are displayed in the footer', 'materialized-wp'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div><hr class="white">',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => "</h4>"
  ));
  register_sidebar(array(
    'name' => __('Slider', 'materialized-wp'),
    'id' => 'slider-1',
    'description' => __('This is a simple sidebar for slider/carousel\'s widgets', 'materialized-wp'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
  ));

}

/**
* Plugin recommanded or required in materialized-wp WP theme
*/
function materialized_wp_required_plugins(){
  $plugins = array(
    array(
      'name' => 'Responsive Lightbox',
      'slug' => 'responsive-lightbox',
      'required' => false,
    ),
  );
  $config = array(
    'id' => 'tgmpa',
    'default_path' => '',
 		'menu'         => 'tgmpa-install-plugins',
 		'parent_slug'  => '',
 		'capability'   => 'edit_theme_options',
 		'has_notices'  => true,
 		'dismissable'  => true,
 		'dismiss_msg'  => '',
 		'is_automatic' => false,
 		'message'      => '',
  );
  tgmpa( $plugins, $config );
}

//Filters
add_filter( 'embed_defaults', 'modify_embed_defaults' );
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'excerpt_length', 'new_excerpt_length' );
//Actions
add_action( 'after_setup_theme','materialized_wp_setup');
add_action('wp_enqueue_scripts', 'wp_resources');
add_action('widgets_init', 'materialized_wp_widgets_init');
add_action('tgmpa_register', 'materialized_wp_required_plugins');

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-content\" id=\"\">\n";
  }
}
