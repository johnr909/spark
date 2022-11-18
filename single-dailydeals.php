<?php
/**
 * The template for displaying daily deals
 ** Template Name: Daily Deals Tpl
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */

get_header(); 
?>

<div class="container-fluid-blog">
    <div class="row">

        <section class="content-area col-sm-12">
            <header class="entry-header-blog">
            </header><!-- .entry-header -->
        </section>

    </div><!-- .row -->
</div><!-- .container-fluid-blog -->

<div class="container-fluid blog">
	<div class="row">

		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<header class="page-header">
					<?php
						the_title( '<h1 class="page-title">', '</h1>' );
					?>
				</header><!-- .page-header -->

                <?php
                    while ( have_posts() ) : the_post();
                    endwhile; 

                    $dealTitle = get_post_meta( $post->ID, 'dealTitle', true );
                    $dealLeadOff = get_post_meta( $post->ID, 'dealLeadOff', true) ;
                    $dealDescriptionText = get_post_meta( $post->ID, 'dealDescriptionText', true );
                    $dealLeadOff2 = get_post_meta( $post->ID, 'dealLeadOff2', true );
                    $dealDescriptionText2 = get_post_meta( $post->ID, 'dealDescriptionText2', true );
                    $postId = get_the_id();


                    echo '<h3>' . $dealTitle . '</h3>';
                    echo  '<p class="mb-0">' . $dealLeadOff . '</p>';
                    the_post_thumbnail( 'medium' );
                    echo  '<p class="mb-0">' . $dealDescriptionText . '</p>';
                    echo  '<p class="mb-0">' . $dealLeadOff2 . '</p>';
                    echo  '<p class="mb-0">' . $dealDescriptionText2 . '</p>';
                    echo  '<p class="mb-0">' . $postId . '</p>';

                ?>

			</main><!-- #main -->
		</section><!-- #primary -->

 </div><!-- .row -->
</div><!-- .container-fluid -->

<?php get_footer(); ?>
