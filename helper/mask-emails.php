<?php

/**
 * Convert e-mail addresses to ASCII Code
 * 
 * Applies to the content through "the_content" filter, can be used
 * elsewhere by calling str_to_ascii( $str )
 */

add_filter( "the_content", "mask_emails", 9999 );

function mask_emails( $content ){
  if ( preg_match('/<a.*href="(mailto.*)".*\>(.*)<\/a>/', $content, $m) ) {
    $content = preg_replace_callback('/(<a.*href=")(mailto.*)(".*\>)(.*)(<\/a>)/', 'matches_to_ascii', $content);
  }
  return $content;
}

function matches_to_ascii( $m ) {
  return $m[1] . str_to_ascii( $m[2] ) . $m[3] . str_to_ascii( $m[4] ) . $m[5];
}

function str_to_ascii( $str ) {
  $tempstr = '';
  for ( $i = 0; $i < strlen( $str ); $i++ ) {
    $tempstr .= '&#' . ord( $str[$i] ) . ';';
  }
  return $tempstr;
}

?>