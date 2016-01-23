<?php
/**
 * Homepage
 */
get_header();

    // Context array.
	$context = array();

	// Dynamic message.
	$var = 'Dynamic Message';

	// Dynamic data.
	$context['the_message'] = $var;

	// Render twig file with the give $context array.
	Timber::render( 'welcome.twig', $context );

get_footer();
