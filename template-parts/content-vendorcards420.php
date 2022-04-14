<?php
/**
 * Template part for the vendor cards in the 420 template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

 /**
 * Setup query to show the ‘Vendor 420 Cards’ post type.
 */
    $args = array(  
        'post_type' => 'vendor420cards',
        'post_status' => 'publish',
        'orderby' => 'title', 
        'order' => 'ASC',
        'posts_per_page' => 20,
    );

    $loop = new WP_Query($args); 
 ?>
 	<div class="row"> 
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

	<?php // include_once get_template_directory_uri() . '/inc/vendorcards420/vendor-card-vars.php'; ?>
 	<?php 
		// Using get_post_meta($post->ID) and similar functions was not working. The home page has an id (value = 2 ) 
		// but that didn't return anything. While in this loop, get_the_ID() returns the id of the individual review
		// and that apparently works
		$id = get_the_ID();
		$vendor_name = get_post_meta($id, 'vendorName', true);
		$vendor_description = get_post_meta($id, 'vendorDescription', true);
		$vendor_product_link = get_post_meta($id, 'productUrl', true)
	?>
		<div class="col-lg-6">
	   	<div class="vendor-card-420 text-left text-uppercase">
	   		<div class="vendor-card-420-img">
	   			<?php the_post_thumbnail(); ?>
	   		</div><!-- .vendor-card-420-img -->
	   		<div class="vendor-card-420-text">
		   		<p class="vendor-name-420 mt-0 mb-0 bolder"><?php echo esc_attr($vendor_name); ?></p>
					<p class="vendor-description-420 mt-0 mb-0"><?php echo esc_attr($vendor_description); ?></p>
					<p class="vendor-product-link-420 mt-0 mb-0">
						<a href="<?php echo esc_attr($vendor_product_link); ?>">
						click to see deals from this vendor</a>
					</p>
				</div><!-- .vendor-card-420-text -->
	   	</div><!-- .vendor-card-420 -->
	    </div><!-- .col-lg-6 -->
    
		
	<?php 
		endwhile;
	?>
	</div><!-- .row -->	
	<?php
		wp_reset_postdata();
	?>
