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
            	</i>&nbsp;&nbsp;Pre-Order Online: It's as easy as 1-2-3-4!</h3>
        </div>
    </div>
    <!-- .row -->

    <div class="row">

       <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">1</h4>
					  <p class="online-cta-text mt-5 green-text text-center">Shop by category, brand or strain</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'hand-r3.svg'; ?>" width="70%" height="70%" alt="hand" class="d-block img-hand">
		    		</div>
        </div><!-- .coupon- -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">2</h4>
						<p class="online-cta-text mt-5 green-text text-center">Checkout and select a pickup time</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'cart-r3.svg'; ?>" width="100%" height="100%" alt="cart" class="d-block img-cart">
		    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">3</h4>
						<p class="online-cta-text mt-5 green-text text-center">Pickup and pay at the store</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'bag-r3.svg'; ?>" width="70%" height="70%" alt="bag" class="d-block img-bag">
		    		</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    		<h4 class="online-step-numbers dark-text">4</h4>
					  <p class="online-cta-text mt-5 green-text text-center">Enjoy!</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'smoke-r3.svg'; ?>" width="80%" height="80%" alt="joint" class="d-block img-joint">
		    		</div>
        </div><!-- .coupon -->

    </div><!-- .row -->

</div><!-- .container-fluid -->