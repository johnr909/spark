<?php
/**
 * Template part for daily deals
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h3 class="lead"><i class="fa fa-cannabis green-text"></i>&nbsp;&nbsp;Daily Deals</h3>
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="row deals">

        <div id="day-Sunday" class="col-sm-3 col-md-1 card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-sunday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Monday" class="col-sm-3 col-md-1 card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-monday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Tuesday" class="col-sm-3 col-md-1 card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-tuesday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Wednesday" class="col-sm-3 col-md-1 card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-wednesday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Thursday" class="col-sm-3 col-md-1 card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-thursday") ) : ?>
			<?php endif;?>
        </div>

        <div id="day-Friday" class="col-sm-3 col-md-1 card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-friday") ) : ?>
			<?php endif;?>
        </div>
        
        <div id="day-Saturday" class="col-sm-3 col-md-1 card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-saturday") ) : ?>
			<?php endif;?>
        </div>


    </div><!-- .row -->

</div><!-- .container-fluid -->