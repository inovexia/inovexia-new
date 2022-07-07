<?php
/**
* Template Name: services
*
* @package WordPress
* @subpackage INV_WPinvwpsTARTER
* @since 2021
*/

get_header ();
?>
<!-- Hero single image -->
<?php get_template_part( 'template-parts/page/services/breadcrumb-banner', ''); ?>

<!-- Content Area Section -->
<?php get_template_part( 'template-parts/page/services/content-section', ''); ?>

<!-- FAQ Section -->
<?php get_template_part( 'template-parts/page/services/why-us', ''); ?>

<!-- Mission Section -->
<?php get_template_part( 'template-parts/page/about-us/missio', ''); ?>

<!-- vision Section -->
<?php get_template_part( 'template-parts/page/about-us/visio', ''); ?>

<!-- Team Section -->
<?php get_template_part( 'template-parts/page/about-us/tea', ''); ?>

<?php
get_footer ();
?>
