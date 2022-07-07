<div class="container">
<div class="text-center mt-5">
        <h1><?php echo the_field('choose_us_heading'); ?></h1>
    </div>

<div class="row content">
	<div class="col-md-4 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left">
		<img src="assets/img/details-4.png" class="img-fluid" alt="">
		<img src="<?php echo the_field('choose_us_icon_1'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" />
	</div>
	<div class="col-md-8 pt-5 order-2 order-md-1 aos-init aos-animate" data-aos="fade-up">
		<h3><?php echo the_field('choose_us_title_1'); ?></h3>
		<p></p>
		<ul>
			<li>
				<i class="bi bi-check"></i> <?php echo the_field('choose_us_title_2'); ?></li>
			<li><i class="bi bi-check"></i> <?php echo the_field('choose_us_title_3'); ?> </li>
			<li><i class="bi bi-check"></i><?php echo the_field('choose_us_description_1'); ?></li>
			<li><i class="bi bi-check"></i><?php echo the_field('choose_us_description_2'); ?></li>
			<li><i class="bi bi-check"></i><?php echo the_field('choose_us_description_3'); ?></li>
		</ul>
	</div>
</div>
</div>


<!--<div class="text-center mt-5">
        <h1><?php echo the_field('choose_us_heading'); ?></h1>
    </div>
<section id="featured-services" class="featured-services">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="icon-box">
					<div class="icon"><img src="<?php echo the_field('choose_us_icon_1'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" /></div>
					<h4 class="title"><a href=""><?php echo the_field('choose_us_title_1'); ?></a></h4>
					<p class="description"><?php echo the_field('choose_us_description_1'); ?></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
				<div class="icon-box">
					<div class="icon"><img src="<?php echo the_field('choose_us_icon_2'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" /></div>
					<h4 class="title"><a href=""><?php echo the_field('choose_us_title_2'); ?></a></h4>
					<p class="description"><?php echo the_field('choose_us_description_2'); ?></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<div class="icon-box">
					<div class="icon"><img src="<?php echo the_field('choose_us_icon_3'); ?>" class="img-fluid " alt="<?php echo bloginfo('name'); ?>" loading="lazy" /></div>
					<h4 class="title"><a href=""><?php echo the_field('choose_us_title_3'); ?></a></h4>
					<p class="description"><?php echo the_field('choose_us_description_3'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

