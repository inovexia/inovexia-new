<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Inovexia_Ecomm_Theme
 */

function invx_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'invx_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function invx_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'invx_pingback_header' );


/* Function to get total products count */
function total_product_count($post_type='product', $post_status='publish') {
    $args = array( 'post_type' => $post_type, 'posts_per_page' => -1, 'post_status' => $post_status );

    $products = new WP_Query( $args );

    return $products->found_posts;
}

/**
* Load script enqueue file.
*/
require get_template_directory() . '/inc/enqueue.php';

/**
 * Load widgets.
 */
require get_template_directory() . '/inc/widget-areas.php';
