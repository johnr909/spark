<?php
/**
 * Template part for the vendor cards in the 420 template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

 /**
 * Setup query to show the ‘Deal 420 Cards’ post type.
 */
    $args2 = array(  
        'post_type' => 'deals420cards',
        'post_status' => 'publish',
        'orderby' => 'title', 
        'order' => 'ASC',
    );

    $loop2 = new WP_Query($args2); 
 ?>
 	<div class="row"> 
	<?php while ($loop2->have_posts()) : $loop2->the_post(); ?>

	<?php // include_once get_template_directory_uri() . '/inc/dealcards420/deals-card-vars.php'; ?>
	<?php
	$idDeal = get_the_ID();
    $brand_name = get_post_meta($idDeal, 'brandName', true);
    $sale_date = get_post_meta($idDeal, 'saleDate', true);
    $deal_description1 = get_post_meta($idDeal, 'dealDescription1', true);
    $deal_description2 = get_post_meta($idDeal, 'dealDescription2', true);
    $deal_description3 = get_post_meta($idDeal, 'dealDescription3', true);
    $exclusive420 = get_post_meta($idDeal, 'exclusive420', true);
    $deal_description420a = get_post_meta($idDeal, 'dealDescription420a', true);
    $deal_description420b = get_post_meta($idDeal, 'dealDescription420b', true);
    $exclusions = get_post_meta($idDeal, 'exclusions', true);
   ?>
 	
		<div class="col-lg-12">
	   	<div class="deal-card-420 text-center">
            <div class="deal-card-420-img">
               <?php the_post_thumbnail(); ?>
            </div><!-- .deal-card-420-img -->
	   		<div class="deal-card-420-text">
   	   		<p><?php echo esc_attr($brand_name); ?></p>
   	   		<p><?php echo esc_attr($sale_date); ?></p>
   	   		<p><?php echo esc_attr($deal_description1); ?></p>
               <p><?php echo esc_attr($deal_description2); ?></p>
               <p><?php echo esc_attr($deal_description2); ?></p>
               <p>
                  <?php 
                     if($exclusive420 === 'yes') {
                        echo esc_attr($exclusive420);
                     }
                  ?>
               </p>

   				<p><?php echo esc_attr($deal_description420); ?></p>
               <p><?php echo esc_attr($exclusions); ?></p>
         </div><!-- .deal-card-420-text -->
	   	</div><!-- .deal-card-420 -->
	    </div><!-- .col-lg-12 -->
    
		
	<?php 
		endwhile;
	?>
	</div><!-- .row -->	
	<?php
		wp_reset_postdata();
	?>
