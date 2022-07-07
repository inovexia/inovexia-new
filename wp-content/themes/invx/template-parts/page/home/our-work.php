<div class="container">
 

 <div class="container">
	 
    <div class="row">
		<div class="text-center mt-5">
	<h1><?php echo the_field('our_work_heading'); ?></h1>
 </div>
		
		<?php 
		$args = array( 
					'post_type' => 'our_works', 
					'posts_per_page' => 4
				);
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) : 
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
				?>
				<div class="col-md-3 Services-tab item">
					<div class="folded-corner service_tab_1">
						<div class="text"> 
							<?php invx_post_thumbnail (); ?>
							<p class="item-title">
								<h3><?php the_title(); ?></h3>
							</p><!-- /.item-title -->
							<p> <?php the_excerpt(); ?> </p>
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

<style>
	body {
    background: 
}

h3 {
    color: #ec5626
}

.text {
    color: #ec5626;
    text-align: center
}

.folded-corner:hover .text {
    visibility: visible;
    color: #000000;
}

.Services-tab {
    margin-top: 80px
}

.folded-corner {
    padding: 60px 30px;
    position: relative;
    font-size: 100%;
    text-decoration: none;
    color: #999;
    background: transparent;
    transition: all ease .5s;
    border: 1px solid #ec5626
}

.folded-corner:hover {
    background-color: #ec5626
}

.folded-corner:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    border-style: solid;
    border-width: 0 0px 0px 0;
    border-color: #ddd #000;
    transition: all ease .3s
}

.folded-corner:hover:before {
    background-color: #D00003;
    border-width: 0 50px 50px 0;
    border-color: #eee #000
}

.service_tab_1 {
    background-color: #000
}

.service_tab_1:hover .fa-icon-image {
    color: #000;
    transform: scale(1.5)
}

.fa-icon-image {
    color: #ec5626;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    line-height: 1;
    font-size-adjust: none;
    font-stretch: normal;
    -moz-font-feature-settings: normal;
    -moz-font-language-override: normal;
    text-rendering: auto;
    transition: all .65s linear 0s;
    text-align: center;
    transition: all 1s cubic-bezier(.99, .82, .11, 1.41)
}
</style>

<!--<div class="container" id="cnt1">
    <div class="row feature">
        <div class="col-md-4">
            <div>
				<img src="<?php echo the_field('work_image_1'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_1'); ?></h2>
                
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="<?php echo the_field('work_image_2'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_2'); ?></h2>
               
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="<?php echo the_field('work_image_3'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_3'); ?></h2>
                
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>
    </div>
	<div class="row feature">
        <div class="col-md-4">
            <div>
                <img src="<?php echo the_field('work_image_4'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_4'); ?></h2>
                
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="<?php echo the_field('work_image_5'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_5'); ?></h2>
                
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="<?php echo the_field('work_image_6'); ?>" class="img-circle img-thumbnail" alt="Texto Alternativo"<?php echo bloginfo('name'); ?>" loading="lazy" />
                <h2><?php echo the_field('work_name_6'); ?></h2>
                
                <a href="#" class="btn btn-success lower">See Feature details</a>
            </div>
        </div>
    </div>
</div>

<style>
 #cnt1 {            
     background-color:rgba(215, 212, 212, 0.88);
     width:90%;
     margin-bottom:70px;
 }
  
 .feature{
     padding: 20px 0;
    text-align: center;
 }
 .feature > div > div{
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: 0.2s;
 }
 .feature > div:hover > div{
    margin-top: -10px;
    border: 1px solid rgb(128, 128, 128);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 5px;
    background: rgba(232, 215, 215, 0.10);
    transition: 0.3s;
 }
</style>

