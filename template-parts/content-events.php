<?php
/**
 * Template part for events
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-8 events">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Events") ) : ?>
                <?php endif;?>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container-fluid -->