<?php
/**
 * Footer Template
 */


// Context array
$context = Timber::get_context();

// Timber ender().
Timber::render( 'footer.twig', $context );
