<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inovexia_Ecomm_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="masthead" class="site-header">
    <?php //if ( has_nav_menu( 'main' ) ) : ?>
        <!-- Top-nav section -->
        <?php //get_template_part('template-parts/header/top-header'); ?>
        <?php get_template_part('template-parts/header/main-nav'); ?>
        <?php //get_template_part('template-parts/header/main-nav-mobile'); ?>
    <?php //endif; ?>
  </header>

  <main id="content" class="site-content">