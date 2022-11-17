<?php
/**
 * Template part for coupons
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spark */
?>

<div class="container-fluid light-blue-bg">

    <div class="row">
        <div class="col">
            <h3 class="lead">
                <i class="fa fa-money-bill-alt green-text"></i>&nbsp;&nbsp;<?php _e( 'Specials', 'spark' ); ?>
            </h3>
        </div>
    </div><!-- .row -->

    <div class="row">
        <div id="coupon-1" class="col-sm-5 col-md coupon rounded">
		    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Coupon 1' ) ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-1 -->

        <div id="coupon-2" class="col-sm-5 col-md coupon rounded">
		    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Coupon 2' ) ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-2 -->

        <div id="coupon-3" class="col-sm-5 col-md coupon rounded">
		    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Coupon 3' ) ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-3 -->

    </div><!-- .row -->

</div><!-- .container-fluid -->
