<?php
/**
* Template Name: Terms Condition
*
* @package WordPress
* @subpackage Inovexia_Ecomm_Theme
* @since 2021
*/

get_header();
?>
<?php get_header(); ?>
<section class="section-privacyfullwidth">
  <div class="container body-container">
    <div class="row">
      <div class="col-12 privacy-inner-content">
        <h4 class="lato-normal-black-pearl-14px text-uppercase"><?php echo the_field('conditions_title'); ?></h4>
        <div class="lato-normal-black-pearl-14px">
          <p><?php echo the_field('condition_content'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
