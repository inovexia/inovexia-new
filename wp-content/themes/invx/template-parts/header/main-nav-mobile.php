<div class="main-mobile-header d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="navbar navbar-expand-md w-100">
          <a href="/" class="d-flex my-2 mb-lg-01 text-dark text-decoration-none d-none">
            <?php
            the_custom_logo();
            
             ?>
          </a>
          <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <div id="mySidenav" class="sidenav">
          <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header d-flex justify-content-end">

              <button type="button" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
            </div>
            <div class="offcanvas-body">
              <?php
                        wp_nav_menu(
                          array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                          )
                        );
                        ?>
              <form class="form-inline my-2 my-lg-0 col-2 d-flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="search-icon" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>