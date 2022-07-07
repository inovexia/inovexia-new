<section class="woocommerce-products-header clearfix w-100 breadcrumb-display-none">
  <div class="container">
    <?php
    /**
     * Hook: woocommerce_before_main_content.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     * @hooked WC_Structured_Data::generate_website_data() - 30
     */
    $args = array(
      'delimiter' => ' > ',
      'before' => ''
    );

    woocommerce_breadcrumb($args);
    if (is_shop()) {
      $title = 'OUR PRODUCTS';
      $sub_title = 'Discover our online catalogue by category.';
    } else if ( is_product()) {
      $title = '';
      $sub_title = '';
    } else if (is_page('blog')) {
      $title = 'BEAUTY INDUSTRY';
      $sub_title = 'Read the latest news about the beauty business.';
    } else if (is_page('privacy-policy')) {
      $title = 'PRIVACY POLICY';
      $sub_title = 'Learn about ' . ucwords(strtolower(get_bloginfo('name'))) . '\'s privacy policy.';
    } else if (is_page('site-map')) {
      $title = 'SITEMAP';
      $sub_title = ucwords(strtolower(get_bloginfo('name'))) . '\'s sitemap.';
    } else if (is_page('faq')) {
      $title = 'FAQ';
      $sub_title = '';
    } else if (is_page('contact')) {
      $title = 'Contact';
      $sub_title = '';
    } else if (is_page('shipping-returns')) {
      $title = 'REFUND AND RETURNS POLICY';
      $sub_title = '';
    } else if (is_page('referral')) {
      $title = '';
      $sub_title = '';
    } else if (is_404()) {
      $title = 'PAGE NOT FOUND';
      $sub_title = '';
    } else if (is_search()) {
      $title = '';
      $sub_title = '';
    } else if (is_page('checkout')) {
      $title = '';
      $sub_title = '';
    } else {
      $title = get_the_title();
      $sub_title = '';
    }
    ?>
    <h1 class="woocommerce-products-header__title page-title"><?php echo $title; ?></h1>
    <p><?php echo $sub_title; ?></p>
    <?php
    /**
     * Hook: woocommerce_archive_description.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action('woocommerce_archive_description');
    ?>
  </div>
</section>
