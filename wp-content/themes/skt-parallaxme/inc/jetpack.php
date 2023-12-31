<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package SKT Parallax Me
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function skt_parallaxme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'sitemain',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'skt_parallaxme_jetpack_setup' );
