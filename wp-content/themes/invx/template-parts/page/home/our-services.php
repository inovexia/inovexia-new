<div class="container">
	<div class="text-left mt-5">
        <h1><?php echo the_field('services_heading'); ?></h1>
    </div>
    <div class="row">
		<?php 
			$args = array( 
						'post_type' => 'our-services', 
						'posts_per_page' => 4 
					);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) : 
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					?>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row " style="padding: 10px;">
                <div class="col-xl-12">
                    <div class="card cssanimation fadeInBottom"> <a href="#" target="_blank">
                            <div class="card-body">
                                <div class="row" id="blockitems">
                                    <div class="col-sm-3 col-md-1 col-lg-1 col-xl-1" id="icons_section">
										<?php the_post_thumbnail([100, 100])  ; ?> </div>
                                    <div class="col-sm-8 col-md-9 col-lg-11 col-xl-11" id="heading_section">
                                        <h6><?php the_title(); ?></h6>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
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
        <!--First Card End-->
        
    </div>
</div>

