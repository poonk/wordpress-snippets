<?php


if( !defined( '_DS_' ) )
  define( '_DS_', DIRECTORY_SEPARATOR );


// mask email-addresses in the content against crawler
include 'helper' . _DS_ . 'mask-emails.php';

// snippets to use with WordPress
include 'helper' . _DS_ . 'wordpress.php';

// snippets to use with Comment Form 7 plugin
include 'helper' . _DS_ . 'commentform7.php';

// snippets to use with Next Gen Gallery plugin
include 'helper' . _DS_ . 'nextgen.php';

// snippets to use with WPML plugin
include 'helper' . _DS_ . 'wpml.php';


/**
 * post thumbnails
 */
add_theme_support( 'post-thumbnails' );


/**
 * image sizes
 */
add_image_size( 'size_name', 1000, 300, true );


/**
 * custom navigation menus
 */
function register_custom_menus() {
  register_nav_menus(
    array(
      'main' => 'Main Navigation',
      'meta' => 'Meta Navigation',
    )
  );
}
add_action( 'init', 'register_custom_menus' );


/**
 * Sidebars
 */
register_sidebar( array(
  'name'          => __( 'Sidebar', 'domain' ),
  'id'            => 'sidebar-id',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
) );


/**
 * posts navigation classes
 */
function previous_posts_link_class($attr) {
  return 'class="prev"';
}
add_filter( 'previous_posts_link_attributes', 'previous_posts_link_class' );

function next_posts_link_class($attr) {
  return 'class="next"';
}
add_filter( 'next_posts_link_attributes', 'next_posts_link_class' );

?>