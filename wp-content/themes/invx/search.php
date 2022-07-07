<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Medical_Depot_Theme
 */

get_header();
global $woocommerce;
global $product;
?>

	<main id="primary" class="site-main search-sections pt-5 pb-3">
    <div id="content" role="main">
			<div class="container">
				<div class="row pb-5">
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post();
							if ( get_post_type() == 'product' ) { //for products
								?>
								<div <?php wc_product_class( 'col-12 col-sm-6 col-lg-4 mt-0 px-1 px-md-2 boder' ); ?>>
								  <div class="product-before-actions">
								    <?php
										/**
										 * Hook: woocommerce_before_shop_loop_item.
										 *
										 * @hooked woocommerce_template_loop_product_link_open - 10
										 */
										do_action( 'woocommerce_before_shop_loop_item' );
										?>
								  </div>
								  <div class="product-image">
								    <div class="product-actions">
								      <div class="action-btn">
								        <?php
								          /**
								           * Hook: woocommerce_after_shop_loop_item.
								           *
								           * @hooked woocommerce_template_loop_product_link_close - 5
								           * @hooked woocommerce_template_loop_add_to_cart - 10
								           */
								          do_action( 'woocommerce_after_shop_loop_item' );
								          ?>
								      </div>
								    </div>
								    <?php

										/**
										 * Hook: woocommerce_before_shop_loop_item_title.
										 *
										 * @hooked woocommerce_show_product_loop_sale_flash - 10
										 * @hooked woocommerce_template_loop_product_thumbnail - 10
										 */
										do_action( 'woocommerce_before_shop_loop_item_title' );
										?>
								  </div>

								  <div class="product-content">
								    <?php
										/**
										 * Hook: woocommerce_shop_loop_item_title.
										 *
										 * @hooked woocommerce_template_loop_product_title - 10
										 */
										//do_action( 'woocommerce_shop_loop_item_title' );
										?>
								    <div class="d-block pdt-title montserrat-semi-bold-ebony-clay-10px">
								      <?php
												$get_title= get_the_title();
												echo substr($get_title, 0, 30);
											?>
								    </div>
								    <?php
										/**
										 * Hook: woocommerce_after_shop_loop_item_title.
										 *
										 * @hooked woocommerce_template_loop_rating - 5
										 * @hooked woocommerce_template_loop_price - 10
										 */
										do_action( 'woocommerce_after_shop_loop_item_title' );
										?>
								  </div>

								</div>
							<?php
							} //end for products
						} // End the loop.
						// If no content, include the "No posts found" template.
					} else {
						echo 'Nothing Found';
					}
				?>
			</div>
		</div>
	</div><!-- #content -->

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
