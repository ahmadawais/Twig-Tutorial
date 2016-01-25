<?php
/**
 * Header Template
 */


// Context array
$context = Timber::get_context();

// Timber ender().
Timber::render( 'header.twig', $context );
