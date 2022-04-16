<?php
/**
* Template Name: Spark 420
*/

get_header(); ?>
<script>
    
jQuery(document).ready(function(){
 jQuery(window).scroll(function(){
 if (jQuery(window).scrollTop() > 100) {
  jQuery('#scrollToTop').fadeIn();
 } else {
  jQuery('#scrollToTop').fadeOut();
 }
 });
});

function scrolltop()
{
 jQuery('html, body').animate({scrollTop : 0},500);
}

</script>

<style>

#scrollToTop
{
 position:fixed;
 left:45%;
 bottom:50px;
 border:3px solid #585858;
 background-color:white;
 color:#585858;
 border-radius:100%;
 height:90px;
 width:90px;
 font-size:15px;
 display:none;
}
</style>
<div id="wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php
                get_template_part( 'template-parts/content', '420-carousel' );
            ?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container">

        <div class="row">
            <section id="primary" class="content-area col-sm-12">      
                <main id="main" class="site-main" role="main">
                    

                    <?php
                        while ( have_posts() ) : the_post();
                        endwhile; // End of the loop.
                    ?>
                    <?php  the_content(); ?>

                </main><!-- #main -->
            </section><!-- #primary -->        

        </div><!-- .row -->

        <?php 
            get_template_part('template-parts/content', 'vendorcards420');

            get_template_part('template-parts/content', 'dealcards420'); 
        ?>
<input type="button" value="Scroll Top" id="scrollToTop" onclick="scrolltop();">

    </div><!-- .container -->
</div><!-- #wrapper -->    
<?php get_footer();
