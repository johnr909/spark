<?php
/**
 * Template part for notices
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

        <div id="notice" class="col">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Notice") ) : ?>
            <?php endif;?>
        </div><!-- .col -->
