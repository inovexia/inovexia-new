<!-- Login/signup Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-content">
      <div class="d-flex justify-content-between">

        <ul class="nav nav-tabs" id="auth-modal-tabs" role="tablist">
          <li class="nav-item montserrat-normal-mexican-red-18px" role="presentation">
            <a class="nav-link active" id="login-tab" aria-controls="login-content" aria-selected="true" data-bs-toggle="tab" data-bs-target="#login-content" type="button" role="tab"
              aria-controls="login-content" aria-selected="true">Login</a>
          </li>
          <li class="nav-item montserrat-normal-mexican-red-18px" role="presentation">
            <a class="nav-link" id="registration-tab" aria-controls="registration-content" aria-selected="true" data-bs-toggle="tab" data-bs-target="#registration-content" type="button" role="tab"
              aria-controls="registration-content" aria-selected="false">Registration</a>
          </li>
        </ul>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="tab-content" id="auth-modal-tab-content">
          <div class="tab-pane fade show active" id="login-content" role="tabpanel" aria-labelledby="login-tab">
            <?php wc_get_template ('myaccount/auth-modal-login-form.php'); ?>
          </div>
          <div class="tab-pane fade" id="registration-content" role="tabpanel" aria-labelledby="registration-tab">
            <?php wc_get_template ('myaccount/auth-modal-registration-form.php'); ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
