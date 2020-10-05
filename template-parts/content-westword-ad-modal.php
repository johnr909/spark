<?php
/**
 * Template part for WestWord Advert Modal Window
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
			    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("WW Ad Modal") ) : ?>
			    <?php endif;?>
				</div><!-- .col -->
		</div><!-- .row -->
</div><!-- .container-fluid -->

