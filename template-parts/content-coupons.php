<?php
/**
 * Template part for coupons
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h3 class="lead"><i class="fa fa-cut green-text"></i>&nbsp;&nbsp;Coupons</h3>
        </div>
    </div><!-- .row -->

    <div class="row">
        <div id="coupon-1" class="col-md coupon rounded">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Coupon 1") ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-1 -->

        <div id="coupon-2" class="col-md coupon rounded">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Coupon 2") ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-2 -->

        <div id="coupon-3" class="col-md coupon rounded">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Coupon 3") ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-3 -->

        <div id="coupon-4" class="col-md coupon rounded">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Coupon 4") ) : ?>
		    <?php endif;?>
        </div><!-- #coupon-4 -->
    </div><!-- .row -->

</div><!-- .container-fluid -->