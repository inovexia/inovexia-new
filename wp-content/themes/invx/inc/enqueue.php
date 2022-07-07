<?php

/**
 * Enqueue scripts and styles.
 */
function invx_add_theme_scripts () {

    /* Add scripts */
    wp_enqueue_script('jquerymainmin', "https://code.jquery.com/jquery-3.3.1.min.js" );
    //wp_enqueue_script( 'wpecomthm-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
    //wp_enqueue_script( 'invwps-swiper-bundle-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );
    //wp_enqueue_script( 'invwps-swiper-sliders-js', get_template_directory_uri() . '/assets/js/swiper-sliders.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'invwps-navigation-js', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

    /* Add styles */
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), _S_VERSION, 'all');
    wp_enqueue_style( 'wpecomthm-bootstrap-css', get_template_directory_uri () . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
    // SwiperJs styles
    //wp_enqueue_style( 'invwps-swiper-bundle-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), _S_VERSION, 'all' );
    //wp_enqueue_style( 'invwps-swiper-styles-css', get_template_directory_uri () . '/assets/css/swiper-styles.css', array(), _S_VERSION, 'all' );
	
    wp_enqueue_style( 'homepage-css', get_template_directory_uri () . '/assets/css/homepage.css', array(), _S_VERSION, 'all' );
	
	//wp_enqueue_style( 'about-us-css', get_template_directory_uri () . '/assets/css/about-us.css', array(), _S_VERSION, 'all' );
	
	//wp_enqueue_style( 'contact-us-css', get_template_directory_uri () . '/assets/css/contact-us.css', array(), _S_VERSION, 'all' );
	
	//wp_enqueue_style( 'work-css', get_template_directory_uri () . '/assets/css/work.css', array(), _S_VERSION, 'all' );

	wp_enqueue_style( 'reset-css', get_template_directory_uri () . '/assets/css/reset.css', array(), _S_VERSION, 'all' );

	wp_enqueue_style( 'styleguide-css', get_template_directory_uri () . '/assets/css/styleguide.css', array(), _S_VERSION, 'all' );
	
	wp_enqueue_style( 'global-css', get_template_directory_uri () . '/assets/css/global.css', array(), _S_VERSION, 'all' );
	
	// Google Fonts
	wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&family=Montserrat:wght@600&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'invx_add_theme_scripts' );

// Load all styles in header
add_action( 'wp_head', 'wp_enqueue_style' );

// Load all scripts in footer
add_action( 'wp_footer', 'wp_enqueue_script' );



function codyframe_register_styles() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/assets/css/styles.css', array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'codyframe_register_styles' );

function codyframe_register_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_script( 'codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );

// no-js support
function codyframe_js_support() {
  ?>
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <?php
}

add_action( 'wp_print_scripts', 'codyframe_js_support');
