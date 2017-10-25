<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Pug Financial
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pugfinancial_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'pugfinancial_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function pugfinancial_jetpack_setup
add_action( 'after_setup_theme', 'pugfinancial_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function pugfinancial_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function pugfinancial_infinite_scroll_render
