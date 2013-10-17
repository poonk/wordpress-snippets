<?php

/**
 * snippets for the WPML plugin
 */

// current language
$currentLanguage = defined( 'ICL_LANGUAGE_CODE' ) ? ICL_LANGUAGE_CODE : 'en';

// disable language selector css
define ( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );

// remove styles and script from wp_head
if( !is_admin() ) {
  remove_action( 'wp_head', array( $sitepress, 'front_end_js' ) );
  remove_action( 'wp_head', array( $sitepress, 'rtl_fix' ) );
  remove_action( 'wp_head', array( $sitepress, 'set_wp_query' ) );
  remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );
  remove_action( 'wp_head', array( $sitepress, 'head_langs' ) );
  remove_action( 'wp_head', array( $sitepress, 'rel_canonical' ) );
  remove_action( 'wp_head', array( $icl_language_switcher, 'language_selector_footer_style' ), 19 );
  remove_action( 'wp_head', array( $icl_language_switcher, 'custom_language_switcher_style' ) );
  remove_action( 'wp_head', 'icl_lang_sel_nav_ob_end' );
  remove_action('init', array('WPML_Browser_Redirect', 'init'));
}

?>