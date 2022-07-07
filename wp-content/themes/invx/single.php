<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Medical_Depot_Theme
 */
get_header();
?>


<?php
		/*while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'invwps' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'invwps' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;*/ // End of the loop.
		?>
<main id="main" class="single-blog" role="main">
  <div class="container">

    <div class="row ">
      <div class="col-md-12">
        <div class="wrap-content">
          <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
			   // get_template_part( 'content', get_post_format() );
		   ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-thumbnail text-center blog-big-image">
              <?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail( 'post-thumbnail' );
					}
					//the_post_thumbnail(array(250, 250)); 
			  ?>
            </div>
            <h2 class="post-title-inner"><?php echo the_title(); ?></h2>
            <div class="archive-meta ">
              <p class="meta-authorcat">
                <span><?php $category = get_the_category();
    						 $allcategory = get_the_category();
    					foreach ($allcategory as $category) {
    						$cat_link = get_category_link($category->cat_ID);
    					?>
                  <a href="<?php echo $cat_link; ?>" class="card-link"><?php echo $category->cat_name;; ?></a>
                  <?php } ?></span>
                <span>/&nbsp;By &nbsp;<?php the_author();?></span>
              </p>/&nbsp;on &nbsp;
              <p class="meta-mdate">
                <span class="meta-date">
                  <a href="<?php the_permalink(); ?>" rel="meta tag"><?php echo get_the_date(__('d'));?></a>
                </span>
                <span class="meta-month">
                  <a href="<?php the_permalink(); ?>" rel="meta tag"><?php echo get_the_date(__('M')); ?> </a>
                </span>
              </p>
            </div>
            <div class="entry-content"><?php the_content(); ?></div>
          </article>

          <?php
    		// End the loop.
    		endwhile;
    	  ?>
        </div>
      </div>


    </div>

    <div class="row">

      <div class="col-md-12 relatedposts">
        <div class="testimonial-slider col-md-12 col-lg-12">
          <div class="swiper swiper-container sinlgepostSwiper">
            <div class="swiper-wrapper">
              <?php
				$related = get_posts(
					array(
						'category__in' => wp_get_post_categories( $post->ID ),
						'numberposts'  => 5,
						'post__not_in' => array( $post->ID )
					)
				);

				if( $related ) {
				foreach( $related as $post ) {
					setup_postdata($post);

			  ?>
              <div class="swiper-slide">
                <div class="testimonial-content ">
                  <div class="row inner-relatedposts justify-content-center">

                    <div class="col-4 col-lg-5">
                      <div class="related-post-thumbnail">
                        <?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail( 'medium' );
							}
							//the_post_thumbnail(array(250, 250)); 
						?>
                      </div>
                    </div>

                    <div class="col-4 col-lg-7 text-start">
                      <div class="related-archive-meta">
                        <span class="meta-date">
                          <?php echo get_the_date(__('d'));?>
                        </span>
                        <span class="meta-month">
                          <?php echo get_the_date(__('M')); ?>
                        </span>

                      </div>
                      <div class="related-archive-titles">
                        <h4 class="text-default"><strong><?php the_title(); ?></strong></h4>
                      </div>
                      <div class="related-archive-author">
                        <p><span>By &nbsp;<?php the_author();?></span></p>

                      </div>
                      <div class="related-archive-readmore">
                        <a href="<?php the_permalink(); ?>" class="card-link"><span></span>Read more</a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <?php
					}
					wp_reset_postdata();
				}
			  ?>
            </div>

            <div class="navigate-btn">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- end related row -->

  </div>
</main><!-- .site-main -->
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();