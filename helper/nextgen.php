<?php

/**
 * snippets for the next gen gallery plugin
 */

// remove styles and script from wp_head
if( !is_admin() ) {
  remove_action('wp_enqueue_scripts', array(&$ngg , 'load_scripts') );
}

?>