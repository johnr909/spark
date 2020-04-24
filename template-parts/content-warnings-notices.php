<?php
/**
 * Template part for warnings and notices
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="container">
    <div class="row">
        <div id="warning" class="col">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Warning") ) : ?>
                    <?php endif;?>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

 <div class="container">
      <div class="row">
          <div id="notice" class="col">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Notice") ) : ?>
                    <?php endif;?>
          </div><!-- .col -->
      </div><!-- .row -->
 </div><!-- .container -->