<?php
/**
 * Template part for warnings
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */
?>

<div id="warning" class="col">
    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Warning' ) ) : ?>
    <?php endif;?>
</div><!-- .col -->
