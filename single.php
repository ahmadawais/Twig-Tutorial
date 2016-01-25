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
$post            = Timber::get_posts();
$context['post'] = $post;

// Timber ender().
Timber::render( 'single.twig', $context );
