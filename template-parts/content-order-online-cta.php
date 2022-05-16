<?php
/**
 * Template part for order online CTA
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */
?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h3 class="lead">
            	</i><?php _e("&nbsp;&nbsp;Pre-Order Online: It's as easy as 1-2-3...Enjoy!", 'spark'); ?>
            </h3>
        </div>
    </div>
    <!-- .row -->

   <div class="row">

       <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text">
                <?php _e('1', 'spark'); ?>
            </h4>
    		  <p class="online-cta-text mt-3 green-text text-center">
                <?php _e('Shop by category, brand or strain', 'spark'); ?>
              </p>
    		<div class="online-icon-container step1">
    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/hand2.svg'; ?>" 
                     alt="hand" class="d-block img-hand" width="25%" height="25%">
    		</div>
        </div><!-- .coupon- -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text">
                <?php _e('2', 'spark'); ?>
            </h4>
				<p class="online-cta-text mt-3 green-text text-center"><?php _e('Checkout and complete your order', 'spark'); ?></p>
    		<div class="online-icon-container step2">                        
    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/cart2.svg'; ?>" 
                     alt="cart" class="d-block img-cart" width="33%" height="33%">
    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text"><?php _e('3', 'spark'); ?></h4>
				<p class="online-cta-text mt-3 green-text text-center">
                    <?php _e('Pickup and pay at the store', 'spark'); ?>
                </p>
    		<div class="online-icon-containers step3">
    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/bag2.svg'; ?>" 
                     alt="bag" class="d-block img-bag" width="25%" height="25%">
    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">
                        <?php _e('4', 'spark'); ?>
                    </h4>
    				  <p class="online-cta-text mt-3 green-text text-center">
                        <?php _e('Enjoy!', 'spark'); ?>
                      </p>
		    		<div class="online-icon-container step4">
		    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/emoji2.svg'; ?>" 
                             alt="joint" class="d-block img-joint" width="30%" height="30%">
		    		</div>
        </div><!-- .coupon -->

    </div>

</div><!-- .container-fluid -->
