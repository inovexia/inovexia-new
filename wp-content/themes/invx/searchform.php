<?php
/**
 * The searchform.php template.
 */
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );


?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-box">
		<input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search for brand, product, category..."/>
	</div>
	
        <button type="submit" class="search-submit d-none" value="<?php echo esc_attr_x( '', 'submit button', 'in-a-flashdev-new' ); ?>"><i class="fa fa-search" aria-hidden="true"></i>
</button>
	
</form>
