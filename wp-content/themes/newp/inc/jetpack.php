<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package newp
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */ 
function newp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
	    'type'           => 'click',
	    'footer_widgets' => true,
	    'container'      => 'main',
	    'render'		 => 'newp_jetpack_render_posts',
	    'posts_per_page' => 6,
	    'wrapper' 		 => false,
	) );
}
add_action( 'after_setup_theme', 'newp_jetpack_setup' );

function newp_jetpack_render_posts() {
		while( have_posts() ) {
	    the_post();
	    do_action('newp_blog_layout'); 
	}
}

function newp_filter_jetpack_infinite_scroll_js_settings( $settings ) {
    $settings['text'] = __( 'Load more...', 'newp' );
 
    return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'newp_filter_jetpack_infinite_scroll_js_settings' );