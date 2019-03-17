<?php
/**
 * Eugcast-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eugcast-child
 */

add_action( 'wp_enqueue_scripts', 'twentynineteen_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentynineteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'eugcast-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'twentynineteen-style' )
	);

}
