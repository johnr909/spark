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
		    <div>
		    	<div class="textwidget custom-html-widget"> 
		    		<h4 class="online-step-numbers dark-text">1</h4>
					  <p class="online-cta-text mt-5 green-text text-center step1">Shop by category, brand or strain</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'hand.svg'; ?>" width="40%" height="40%" alt="hand" class="d-block img-hand">
		    		</div>
				</div>
			</div>
        </div><!-- .coupon- -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    <div>
		    	<div class="textwidget custom-html-widget">
		    		<h4 class="online-step-numbers dark-text">2</h4>
						<p class="online-cta-text mt-5 green-text text-center step2">Checkout and select a pickup time</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'cart.svg'; ?>" width="65%" height="65%" alt="cart" class="d-block img-cart">
		    		</div>
				</div>
			</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    <div>
		    	<div class="textwidget custom-html-widget">
		    		<h4 class="online-step-numbers dark-text">3</h4>
						<p class="online-cta-text mt-5 green-text text-center step3">Pickup and pay at the store</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'bag.svg'; ?>" width="45%" height="45%" alt="bag" class="d-block img-bag">
		    		</div>
				</div>
			</div>
        </div><!-- .coupon -->

        <div class="col-sm-5 col-md coupon rounded online-cta">
		    <div>
		    	<div class="textwidget custom-html-widget">
		    		<h4 class="online-step-numbers dark-text">4</h4>
					  <p class="online-cta-text mt-5 green-text text-center step4">Enjoy!</p>
		    		<div class="online-icon-container">
		    			<img src="<?php echo get_template_directory_uri() .'/inc/assets/images/' .'smoke.svg'; ?>" width="55%" height="55%" alt="joint" class="d-block img-joint">
		    		</div>
				</div>
			</div>
        </div><!-- .coupon -->

    </div><!-- .row -->

</div><!-- .container-fluid -->