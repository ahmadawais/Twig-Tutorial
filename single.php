<?php
/**
 * Single Template
 *
 * The Template for displaying all single posts.
 *
 * @since 1.0.0
 */

// Context array
$context         = Timber::get_context();
$post            = new TimberPost();
$context['post'] = $post;

// Using the TimberImage() function
// to retrieve the image via its ID i.e 8
$context['custom_img'] = new TimberImage( 8 );

// Timber ender().
Timber::render( 'single.twig', $context );
