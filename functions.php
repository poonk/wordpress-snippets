<?php

if( !defined( '_DS_' ) )
  define( '_DS_', DIRECTORY_SEPARATOR );

// mask email-addresses in the content against crawler
include 'helper' . _DS_ . 'mask-emails.php';

?>