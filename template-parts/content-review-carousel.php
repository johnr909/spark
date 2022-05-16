<?php
/**
 * Template part for the home page reviews in carousel
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */

 /**
 * Setup query to show the ‘reviews’ post type with ‘10’ posts.
 */
    $args = array(  
        'post_type' => 'reviews',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'meta_key' => 'spark_review_status', // Filter to display only active reviews
        'meta_value' => 'yes',
    );

    $loop = new WP_Query( $args ); 
 ?>

<h5 class="rewards-title text-center">
	<?php _e( 'Reviews', 'spark' ); ?>
</h5>

<div id="carouselTestimonials" class="carousel slide carousel-fade" data-ride="carousel">

  <div class="carousel-inner">
		<?php 
			// need to set a counter for the JavaScript used by the carousel
			$counter = 0; 
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $counter++; ?>
		<?php 
				// Using get_post_meta($post->ID) and similar functions was not working. The home page has an id (value = 2 ) 
				// but that didn't return anything. While in this loop, get_the_ID() returns the id of the individual review
				// and that apparently works
				$id = get_the_ID();
    		$reviewer = get_post_meta( $id, 'jr_reviewer', true );
  	    $icon = get_post_meta( $id, 'spark_review_icon', true );
  	  ?>
  	 	<div class="carousel-item <?php if ($counter == 1) _e( ' active', 'spark' ); ?>" data-interval="5000">
  	 		<blockquote>
					<p class="testimonial-text"><i class="fa fa-<?php echo esc_attr( $icon ); ?>"></i>&nbsp;&nbsp;
						<?php 
							 // we use 'echo get_the_content()'' instead of just 'the_content()'' since the
							 // latter adds html(<p>) tags that foul up the presentation here							 
							 echo get_the_content(); 
						?>
 					</p>
					<p><cite title="<?php echo esc_attr( $reviewer ); ?>"><?php echo esc_html( $reviewer ); ?></cite></p>
				</blockquote>

				 <a href="<?php echo esc_url( 'https://www.leafly.com/dispensary-info/sense-of-healing', 'spark' ); ?>" 
				    title="<?php esc_attr_e( 'Spark Dispensary Reviews', 'spark' ); ?>" target="_blank">
				    <img src="<?php echo esc_url( 'https://www.leafly.com/badge/2x/sense-of-healing.png', 'spark' ); ?>" 
				         width="212" 
				         class="d-block mx-auto mt-4 mb-4"/>
				 </a> 
  
  		</div><!-- .carousel-item -->

    	<?php 
    		endwhile;
				wp_reset_postdata();
			?>

	</div><!-- .carousel-inner -->

</div><!-- #carousel -->
