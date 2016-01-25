<?php
/**
 * Homepage
 */

// Context array.
$context = array();

// Add the page ID which is 4 in my case.
$context[ 'welcome_page' ] = Timber::get_post( 4 );

// Timber render().
Timber::render( 'welcome.twig', $context );
