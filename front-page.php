<?php 
/**
* Template Name: Home
* @package spark 
*/

get_header(); ?>

    <div class="container-fluid">
        <div class="row">
			<?php
			    get_template_part( 'template-parts/content', 'rec-page' );
			?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    
<?php
get_footer();
