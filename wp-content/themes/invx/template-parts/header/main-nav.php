<section class="main-nav">
    <div class="container">
        <nav id="site-navigation" class="main-navigation navbar">
            <div class="site-branding">
                <?php if( has_custom_logo() ):  ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
                    <?php the_custom_logo(); ?>
                </a>
                <?php else: ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                    class="site-title"><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <div class="nav-menu-container">
                <?php
                wp_nav_menu( array(
                    'menu_class'     => 'nav-menu',
                    'depth'          => 1,
                    'menu'           => 'main'
                ) );
                ?>
            </div>

            <div class="menu-toggler" id="menu-toggler">
              <a href="#" class="toggle-icon" id="menu-toggler" onclick="toggle_menu ()">&#9776;</a>
            </div>
        </nav><!-- #site-navigation -->
    </div>
    <div class="mob-menu">
        <div class="container">
            <div class="nav-menu-container">
                <?php
                wp_nav_menu( array(
                    'menu_class'     => 'nav-menu',
                    'depth'          => 1,
                    'menu'           => 'main'
                ) );
                ?>
            </div>
        </div>
    </div>
</section>