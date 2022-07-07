<section class="features">
	<div class="container">
		<div class="section-title">
			<h2><?php echo the_field('why_main_heading'); ?></h2>
			<p><?php echo the_field('main_description'); ?></p>
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up">
			<div class="col-md-5"> 
				<img src="<?php echo the_field('why_image_1'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" />
			</div>
			<div class="col-md-7 pt-4">
				<h3><?php echo the_field('why_title_1'); ?></h3>
				<p class="fst-italic"> <?php echo the_field('why_description_1'); ?></p>
				<ul>
					<li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
					<li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				</ul>
			</div>
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up">
			<div class="col-md-5 order-1 order-md-2">
				<img src="<?php echo the_field('why_image_2'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" />
			</div>
			<div class="col-md-7 pt-5 order-2 order-md-1">
				<h3><?php echo the_field('why_title_2'); ?></h3>
				<p class="fst-italic"><?php echo the_field('why_description_2'); ?></p>
				
			</div>
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up">
			<div class="col-md-5">
				<img src="<?php echo the_field('why_image_3'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" />
			</div>
			<div class="col-md-7 pt-5">
				<h3><?php echo the_field('why_title_3'); ?></h3>
				<p><?php echo the_field('why_description_3'); ?></p>
				<ul>
					<li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
					<li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
					<li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
				</ul>
			</div>
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up">
			<div class="col-md-5 order-1 order-md-2"> 
				<img src="<?php echo the_field('why_image_4'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" />
			</div>
			<div class="col-md-7 pt-5 order-2 order-md-1">
				<h3><?php echo the_field('why_title_4'); ?></h3>
				<p class="fst-italic"> <?php echo the_field('why_description_4'); ?></p>
				<p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
		</div>
	</div>
</section>

