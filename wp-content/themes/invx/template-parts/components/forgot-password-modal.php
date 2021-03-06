<div class="modal fade" id="auth-modal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <?php
        do_action( 'woocommerce_before_lost_password_form' );
      ?>

      <form method="post" class="woocommerce-ResetPassword lost_reset_password">

          <p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

          <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
            <label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="text" name="user_login" id="user_login" autocomplete="username" />
          </p>

          <div class="clear"></div>

          <?php do_action( 'woocommerce_lostpassword_form' ); ?>

          <p class="woocommerce-form-row form-row">
            <input type="hidden" name="wc_reset_password" value="true" />
            <button type="submit" class="woocommerce-Button reset-button button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
          </p>

          <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

      </form>

      <?php
      do_action( 'woocommerce_after_lost_password_form' );
      ?>

    </div>
  </div>
</div>
