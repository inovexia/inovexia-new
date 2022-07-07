<?php
/**
* Template Name: work
*
* @package WordPress
* @subpackage Inovexia_Ecomm_Theme
* @since 2021
*/

get_header ();

?>

<!-- Hero section -->
<?php get_template_part( 'template-parts/page/home/hero-ima', 'hero'); ?>

<!--our-client Section-->
<?php get_template_part( 'template-parts/page/work/Breadcrumb'); ?>

<!--our-services Section-->
<?php get_template_part( 'template-parts/page/work/content'); ?>

<!--our-work Section-->
<?php get_template_part( 'template-parts/page/home/our-wor'); ?>

<!--why choose us Section-->
<?php get_template_part( 'template-parts/page/home/choose-u'); ?>

<!--testimonials Section-->
<?php get_template_part( 'template-parts/page/home/testimonial'); ?>


<!-- Supplier section -->
<?php //get_template_part( 'template-parts/page/home/supplier', 'supplier'); ?>

<!--Industry Blogs-->
<?php get_template_part( 'template-parts/page/home/industry-blogs', 'blogs'); ?>

<!-- Recommended Products -->
<?php get_template_part( 'template-parts/page/home/recommended-products', 'recommended'); ?>



<!--Help Section-->
<?php get_template_part( 'template-parts/page/home/help', 'help'); ?>



<!--Product category slider -->
<?php //get_template_part( 'template-parts/page/home/product-category-slider', 'category'); ?>

<?php

get_footer ();
?>
