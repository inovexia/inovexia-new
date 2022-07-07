<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inovexia_Ecomm_Theme
 */

?>

  <div class="clearfix"></div>
</main>

<footer id="colophon" class="site-footer py-5">
  <!-- Include top nav bar -->
  <?php get_template_part('template-parts/footer/top', 'footer'); ?>
  <!-- Include main nav -->
  <?php //get_template_part('template-parts/footer/bottom', 'footer'); ?>

</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
