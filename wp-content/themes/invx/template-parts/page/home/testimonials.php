<div class="text-center mt-5">
        <h1><?php echo the_field('testimonial_heading'); ?></h1>
    </div>
<div class="container">
    <div class="row">
           
                <?php 
			$args = array( 
						'post_type' => 'testimonials', 
						'posts_per_page' => 4 
					);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) : 
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					?>
					<div class="col-md-3 Services-tab item">
					<div class="">
						<div class="text"> 
							<p> <?php the_excerpt(); ?> </p>
							<p class="item-title">
								<h3><?php the_title(); ?></h3>
							</p><!-- /.item-title -->
						<?php invx_post_thumbnail (); ?>
						</div>
					</div>
				</div>
					<?php 
				endwhile;
				wp_reset_postdata();
			else:  
				?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php 
			endif; 
		?>
               
                </div>
		</div>
		
        
		
        
    </div>
</div>


<!--<div class="text-center mt-5">
        <h1><?php echo the_field('testimonial_heading'); ?></h1>
    </div>
<div class="container mt-5 mb-5">
    <div class="row g-2">
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="<?php echo the_field('customer_image1'); ?>" class="rounded-circle " width="80" alt="<?php echo bloginfo('name'); ?>" loading="lazy" /> </div>
                <div class="user-content">
                    <h5 class="mb-0"><?php echo the_field('customer_name_1'); ?></h5> <span></span>
                    <p><?php echo the_field('review_1'); ?></p>
                </div>
                </div>
		</div>
		
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="<?php echo the_field('customer_image_2'); ?>" class="rounded-circle " width="80" alt="<?php echo bloginfo('name'); ?>" loading="lazy" /> </div>
                <div class="user-content">
                    <h5 class="mb-0"><?php echo the_field('customer_name_2'); ?></h5> <span></span>
                    <p><?php echo the_field('review_2'); ?></p>
                </div>
               </div>
			</div>
		
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="<?php echo the_field('customer_image_3'); ?>" class="rounded-circle " width="80" alt="<?php echo bloginfo('name'); ?>" loading="lazy" /> </div>
                <div class="user-content">
                    <h5 class="mb-0"><?php echo the_field('customer_name_3'); ?></h5> <span></span>
                    <p><?php echo the_field('review_3'); ?></p>
                </div>
                
            </div>
        </div>
    </div>
</div>--->

--------------------------
<!--<section class="our-team-wrp section-margin">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="heading-section d-flex justify-content-center">
          <h2 class="main-heading">
            <?php echo the_field('testimonial_heading'); ?>
          </h2>
        </div>
      </div>
    </div>
    <div class="row section-margin-row">
      
      <div class="row courses-slider-row section-margin-row">
        <div class="swiper teamemobileslider">
          <div class="swiper-wrapper">
            <?php
                    $args = array( 
                        'post_type' => 'testimonial', 
                       'posts_per_page' => 4 
					);
                    $post_query = new WP_Query( $args );
                     
                     if($post_query->have_posts() ) {
                     while($post_query->have_posts() ) {
                        
                        $post_query->the_post();
                        ?>
            <div class="swiper-slide">
              <div class="col-12">
                <div class="team-box">
                  <div class="team-box-img">
                   <p> <?php the_excerpt(); ?> </p>
							<p class="item-title">
								<h3><?php the_title(); ?></h3>
							</p><!-- /.item-title -->
						<?php invx_post_thumbnail (); ?>
                  </div>
			
				 
                </div>
              </div>
            </div>
            <?php 
                     }
                     }
                     wp_reset_query();
                     ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
</section>