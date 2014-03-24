<?php

function query_one_pager() {
  $pageIDs = array();
  if (($locations = get_nav_menu_locations()) && $locations['nav-main'] ) {
    $menu = wp_get_nav_menu_object( $locations['nav-main'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    foreach($menu_items as $item) {
      if($item->object == 'page')
        $pageIDs[] = $item->object_id;
    }
    query_posts(
      array(
        'post_type' => 'page',
        'post__in' => $pageIDs,
        'posts_per_page' => count($pageIDs),
        'orderby' => 'post__in'
      )
    );
  }
  return $pageIDs;
}


/* on template file */

query_one_pager(); // before the loop

?>