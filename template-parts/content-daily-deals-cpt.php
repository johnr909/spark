<?php
/**
 * Template part for the daily deals the Daily Deals template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */

 /**
 * Setup query to show the ‘daily Deals’ post type.
 */

    $args = array(  
        'post_type' => 'dailydeals',
        'post_status' => 'publish',
        'orderby' => 'title', 
        'order' => 'ASC',
        'posts_per_page' => 20,
    );

    $loop = new WP_Query( $args ); 
 ?>

<div class="row deals"> 
  <?php 
    while ( $loop->have_posts() ) : $loop->the_post(); 

    $id = get_the_ID();
    $deal_title = get_post_meta( $post->ID, 'dealTitle', true );
    $deal_lead_off = get_post_meta( $post->ID, 'dealLeadOff', true );
    $deal_description_text = get_post_meta( $post->ID, 'dealDescriptionText', true );
    $deal_lead_off2 = get_post_meta( $post->ID, 'dealLeadOff2', true );
    $deal_description_text2 = get_post_meta( $post->ID, 'dealDescriptionText2', true );
  ?>
    <div id="day-<?php the_title(); ?>" class="col-sm-3 col-md-1 card">
      <div class="<?php the_title(); ?>">
        
        <?php the_post_thumbnail(); ?>


      </div><!-- /.the_title() -->

      <div id="<?php the_title(); ?>">
        
        <div class="card-body">
          
          <div class="card-title">
            <h5 class="text-center">
              <?php echo esc_attr( $deal_title ); ?>
            </h5>
          </div><!-- /.card-title -->

          <h6 class="text-center">
            <?php echo esc_attr( $deal_lead_off ); ?>
          </h6>
          <p class="card-text mb-3">
            <?php echo esc_attr( $deal_description_text ); ?>
          </p>

          <?php
            if(isset($deal_lead_off2) && strlen($deal_lead_off2) > 0) {
              echo '<h6 class="text-center">' . esc_attr($deal_lead_off2) . '</h6>';
            }

            if(isset($deal_description_text2) && strlen($deal_description_text2) > 0) {
                echo '<p class="card-text mb-3">' . esc_attr($deal_description_text2) . '</p>';
            }
          ?>


          <p>
            <?php echo 'the id via get_the_ID(): ' . $id; ?></p>
          <p>
            <?php 
              global $post;
              echo 'the post name: ' . $post->post_name;
            ?>
          </p>
          <p>
            <?php
              $slug = basename(get_permalink());
              echo 'the post slug: ' . $slug;
            ?>
          </p>
          <p>
            <?
              $gptById = get_post_type($id);
              echo 'get_post_type($id): ' . $gptById;
              // the_title();
            ?> 
          </p>
          <p>
            <?php 
              $saturdayPost = get_page_by_path('saturday', '', 'dailydeals');
              echo 'post id for Saturday (857): ' . $saturdayPost->ID;
            ?>
          </p>

          </div><!-- /.card-body -->
      </div><!-- /#the_title() -->

      
    </div><!-- .col-sm-3 -->
    <?php 
      // $postie = get_page_by_path( 'saturday', OBJECT, 'dailydeals' ); 
      // var_dump($postie);
      // the_post_thumbnail($saturdayPost->ID);
      // $thumb = get_post_thumbnail_id( 843 );
      // the_post_thumbnail(843);
      // var_dump($thumb);
    ?>
   
  <?php 
    endwhile;
  ?>
  </div><!-- .row --> 
  <?php
    wp_reset_postdata();
  ?>


  
