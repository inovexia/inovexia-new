<div class="b-example-divider"></div>
<div class="services">
<div class="text-left mt-5">
        <h1><?php echo the_field('service_titl'); ?></h1>
    </div>

<section class="position-relative z-index-1 padding-y-lg">
  <div class="container max-width-adaptive-lg">
	<div class="row grid gap-md">
		<?php 
			$args = array( 
						'post_type' => 'our-services', 
						'posts_per_page' => 6 
					);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) : 
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					?>
					<div class="col-md-6">
						<div class="d-flex gap-sm">
						  <div class="post-thumbnail flex-shrink-0">
							<?php invx_post_thumbnail (); ?>
						  </div>
					
						  <div class="text-component">
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
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

</section>
	</div>
