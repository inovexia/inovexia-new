<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-mini-cart" aria-labelledby="offcanvasMiniCart">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title syncopate-normal-black-pearl-24px" id="offcanvasMiniCartLabel">Cart </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body offcanvas-mini-cart">
    <div class="mini-cart-content" id="mini-cart-content">
      <?php woocommerce_mini_cart(); ?>
    </div>
  </div>
</div>

<?php //echo do_shortcode(['custom-mini-cart']); ?>
