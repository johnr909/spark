<?php
/**
 * Template part for the vendor cards in the 420 template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

 /**
 * Setup query to show the ‘vendor 420 cards’ post type.
 */
    $args = array(  
        'post_type' => 'vendor420cards',
        'post_status' => 'publish',
        'orderby' => 'title', 
        'order' => 'ASC',
    );

    $loop = new WP_Query($args); 
 ?>
 	<div class="row"> 
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

	<?php 
		// Using get_post_meta($post->ID) and similar functions was not working. The home page has an id (value = 2 ) 
		// but that didn't return anything. While in this loop, get_the_ID() returns the id of the individual review
		// and that apparently works
		$id = get_the_ID();
		$vendor_name = get_post_meta($id, 'vendorName', true);
	   $vendor_description = get_post_meta($id, 'vendorDescription', true);
	?>
 	
		<div class="col-lg-6">
	   	<div class="vendor-card-420 text-center">
	   		<?php the_post_thumbnail( 'thumbnail' ); ?>
	   		<p><?php echo $vendor_name; ?></p>
				<p><?php echo $vendor_description; ?></p>
	   	</div><!-- .vendor-card-420 -->
	    </div><!-- .col-lg-6 -->
    
		
	<?php 
		endwhile;
	?>
	</div><!-- .row -->	
	<?php
		wp_reset_postdata();
	?>
