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
    <div class="row col">
        <h3>Deals of the Week</h3>
    </div>
</div>

<div class="container-fluid">
    <div class="row deals">

        <div id="day-Sunday" class="col-md card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-sunday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Monday" class="col-md card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-monday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Tuesday" class="col-md card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-tuesday") ) : ?>
		    <?php endif;?>
        </div>

        <div id="day-Wednesday" class="col-md card">
		    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-wednesday") ) : ?>
		    <?php endif;?>
        </div>

    </div><!-- .row -->
</div><!-- .container-fluid -->

<div class="container-fluid">
    <div class="row deals">

        <div id="day-Thursday" class="col-md card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-thursday") ) : ?>
			<?php endif;?>
        </div>

        <div id="day-Friday" class="col-md card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-friday") ) : ?>
			<?php endif;?>
        </div>

        <div id="day-Saturday" class="col-md card">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("deal-saturday") ) : ?>
			<?php endif;?>
        </div>

        <div class="col-sm" style="margin: 5px; padding: 5px;"></div>

    </div><!-- .row -->
</div><!-- .container-fluid -->