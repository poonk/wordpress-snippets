<?php

/**
 * snippets for the commentform7 plugin
 */

define ( 'WPCF7_LOAD_JS', false );
define ( 'WPCF7_LOAD_CSS', false );

if( !is_admin() ) {
  remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_scripts' );
  remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_styles' );
}

?>