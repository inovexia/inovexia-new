<div class="main-header d-none d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md w-100">
          <a href="/" class="d-flex my-2 mb-lg-01 text-dark text-decoration-none">
            <?php
            the_custom_logo();
            
             ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse col-9">
            <?php
                        wp_nav_menu(
                          array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                          )
                        );
                        ?>

          </div>
          <!--<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form form-inline my-2 my-lg-0 col-2 d-flex">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
            <button class="search-icon" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" ><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>-->
          <form role="search" method="get" id="searchform" class="searchform form-inline my-2 my-lg-0 col-2 d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div>
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
              
            </div>
          </form>
        </nav>
      </div>
    </div>
  </div>

</div>