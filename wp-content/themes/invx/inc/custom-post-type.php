<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

/*
* Creating a function to create our CPT
*/

function custom_post_type_jobs () {

    /*Custom Post type start*/
    $supports = array(
      'title', // post title
      'editor', // post content
      'author', // post author
      'thumbnail', // featured images
      'excerpt', // post excerpt
      'custom-fields', // custom fields
      'comments', // post comments
      'revisions', // post revisions
      'post-formats', // post formats
    );
    $labels = array(
      'name' => _x('Our Job', 'plural'),
      'singular_name' => _x('Our Job', 'singular'),
      'menu_name' => _x('Jobs', 'admin menu'),
      'name_admin_bar' => _x('job', 'admin bar'),
      'add_new' => _x('Add Job', 'add new'),
      'add_new_item' => __('Add New Job'),
      'new_item' => __('New job'),
      'edit_item' => __('Edit job'),
      'view_item' => __('View job'),
      'all_items' => __('All jobs'),
      'search_items' => __('Search job'),
      'not_found' => __('No work found.'),
    );
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'rewrite' => array('slug' => 'our_jobs'),
      'has_archive' => true,
    );
    register_post_type('job', $args);
    // register taxonomy
    register_taxonomy('jobs', 'job', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'job' )));

}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_jobs', 0 );

function custom_post_type_services () {

    /*Custom Post type start*/
    $supports = array(
      'title', // post title
      'editor', // post content
      'author', // post author
      'thumbnail', // featured images
      'excerpt', // post excerpt
      'custom-fields', // custom fields
      'comments', // post comments
      'revisions', // post revisions
      'post-formats', // post formats
    );
    $labels = array(
      'name' => _x('Our Service', 'plural'),
      'singular_name' => _x('Our Service', 'singular'),
      'menu_name' => _x('Services', 'admin menu'),
      'name_admin_bar' => _x('service', 'admin bar'),
      'add_new' => _x('Add Service', 'add new'),
      'add_new_item' => __('Add New Service'),
      'new_item' => __('New services'),
      'edit_item' => __('Edit services'),
      'view_item' => __('View service'),
      'all_items' => __('All services'),
      'search_items' => __('Search service'),
      'not_found' => __('No work found.'),
    );
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'rewrite' => array('slug' => 'our_services'),
      'has_archive' => true,
    );
    register_post_type('service', $args);
    // register taxonomy
    register_taxonomy('services', 'service', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'service' )));

}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_services', 0 );

function custom_post_type_works () {

    /*Custom Post type start*/
    $supports = array(
      'title', // post title
      'editor', // post content
      'author', // post author
      'thumbnail', // featured images
      'excerpt', // post excerpt
      'custom-fields', // custom fields
      'comments', // post comments
      'revisions', // post revisions
      'post-formats', // post formats
    );
    $labels = array(
      'name' => _x('Our Work', 'plural'),
      'singular_name' => _x('Our Work', 'singular'),
      'menu_name' => _x('Works', 'admin menu'),
      'name_admin_bar' => _x('work', 'admin bar'),
      'add_new' => _x('Add Work', 'add new'),
      'add_new_item' => __('Add New Work'),
      'new_item' => __('New works'),
      'edit_item' => __('Edit works'),
      'view_item' => __('View works'),
      'all_items' => __('All works'),
      'search_items' => __('Search work'),
      'not_found' => __('No work found.'),
    );
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'rewrite' => array('slug' => 'our_works'),
      'has_archive' => true,
    );
    register_post_type('work', $args);
    // register taxonomy
    register_taxonomy('works', 'work', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'work' )));

}
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_works', 0 );