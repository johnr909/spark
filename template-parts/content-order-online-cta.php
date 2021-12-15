<?php
/**
 * Template part for order online CTA
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h3 class="lead">
            	</i><?php _e("&nbsp;&nbsp;Pre-Order Online: It's as easy as 1-2-3...Enjoy!", 'wp-bootstrap-starter'); ?>
            </h3>
        </div>
    </div>
    <!-- .row -->

   <div class="row">

       <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text">
                <?php _e('1', 'wp-bootstrap-starter'); ?>
            </h4>
    		  <p class="online-cta-text mt-3 green-text text-center">
                <?php _e('Shop by category, brand or strain', 'wp-bootstrap-starter'); ?>
              </p>
    		<div class="online-icon-container step1">
    			<img src="<?php echo esc_url('../wp-content/themes/spark/inc/assets/images/hand2.svg', 'wp-bootstrap-starter'); ?>" alt="hand" class="d-block img-hand" width="25%" height="25%">
    		</div>
        </div><!-- .coupon- -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text">
                <?php _e('2', 'wp-bootstrap-starter'); ?>
            </h4>
				<p class="online-cta-text mt-3 green-text text-center"><?php _e('Checkout and complete your order', 'wp-bootstrap-starter'); ?></p>
    		<div class="online-icon-container step2">                        
    			<img src="<?php _e('../wp-content/themes/spark/inc/assets/images/cart2.svg', 'wp-bootstrap-starter'); ?>"     alt="cart" class="d-block img-cart" width="33%" height="33%">
    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
    		<h4 class="online-step-numbers dark-text"><?php _e('3', 'wp-bootstrap-starter'); ?></h4>
				<p class="online-cta-text mt-3 green-text text-center">
                    <?php _e('Pickup and pay at the store', 'wp-bootstrap-starter'); ?>
                </p>
    		<div class="online-icon-containers step3">
    			<img src="<?php echo esc_url('../wp-content/themes/spark/inc/assets/images/bag2.svg'); ?>" 
                     alt="bag" class="d-block img-bag" width="25%" height="25%">
    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">
                        <?php _e('4', 'wp-bootstrap-starter'); ?>
                    </h4>
    				  <p class="online-cta-text mt-3 green-text text-center">
                        <?php _e('Enjoy!', 'wp-bootstrap-starter'); ?>
                      </p>
		    		<div class="online-icon-container step4">
		    			<img src="<?php echo esc_url('../wp-content/themes/spark/inc/assets/images/emoji2.svg', 'wp-bootstrap-starter' ); ?>" 
                             alt="joint" class="d-block img-joint" width="30%" height="30%">
		    		</div>
        </div><!-- .coupon -->

    </div>

</div><!-- .container-fluid -->
