<?php

namespace sparkt;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
   
/*--------------------------------------------------------------
## Spark  Widgets
--------------------------------------------------------------*/
// blog sidebar
  register_sidebar( array(
    'name' => esc_html__( 'Sidebar Spark Main', 'spark' ),
    'id' => 'sidebar-spark',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

//  Westword Weekly Ad Image
  register_sidebar( array(
    'name' => esc_html__( 'Westword Weekly Ad Image', 'spark' ),
    'id' => 'wwwadi',
    'before_widget' => '<div class="wwwadi">',
    'after_widget' => '</div><!-- .wwwadi -->',
  ) );

// Header/Footer blocks
  register_sidebar( array(
    'name' => esc_html__( 'Header Location Phone', 'spark' ),
    'id' => 'header-location',
    'before_widget' => '<div class="col col-md-5 col-lg-4 text-right header">',
    'after_widget' => '</div><!-- .col header -->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'Footer Location', 'spark' ),
    'id' => 'header-footer-location',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-4 footer">',
    'after_widget' => '</div><!-- .col footer left-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'Footer Phone', 'spark' ),
    'id' => 'header-footer-phone',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-2 footer">',
    'after_widget' => '</div><!-- .col footer right-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'Footer Email', 'spark' ),
    'id' => 'header-footer-email',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 footer">',
    'after_widget' => '</div><!-- .col footer left-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'Footer Store Hours', 'spark' ),
    'id' => 'header-footer-store-hours',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 footer">',
    'after_widget' => '</div><!-- .col footer right-->',
  ) );

//  Warning
  register_sidebar( array(
    'name' => esc_html__( 'Warning', 'spark' ),
    'id' => 'warning',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

//  Notice
  register_sidebar( array(
    'name' => esc_html__( 'Notice', 'spark' ),
    'id' => 'notice',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

//  Rewards Signup
  register_sidebar( array(
    'name' => esc_html__( 'Rewards Signup', 'spark' ),
    'id' => 'rewards',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

  //  Product Spotlight
  register_sidebar( array(
    'name' => esc_html__( 'Product Spotlight', 'spark' ),
    'id' => 'products',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );


  //  Education Callout
  register_sidebar( array(
    'name' => esc_html__( 'Education Callout', 'spark' ),
    'id' => 'edu',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

//  Daily Deals
  register_sidebar( array(
    'name' => esc_html__( 'deal-sunday', 'spark' ),
    'id' => 'sunday',
    'before_widget' => '<div id="Sunday">',
    'after_widget' => '</div><!-- #Sunday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'deal-monday', 'spark' ),
    'id' => 'monday',
    'before_widget' => '<div id="Monday">',
    'after_widget' => '</div><!-- #Monday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'deal-tuesday', 'spark' ),
    'id' => 'tuesday',
    'before_widget' => '<div id="Tuesday">',
    'after_widget' => '</div><!-- #Tuesday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__( 'deal-wednesday', 'spark' ),
    'id' => 'wednesday',
    'before_widget' => '<div id="Wednesday">',
    'after_widget' => '</div><!-- #Wednesday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__('deal-thursday', 'spark'),
    'id' => 'thursday',
    'before_widget' => '<div id="Thursday">',
    'after_widget' => '</div><!-- #Thursday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__('deal-friday', 'spark'),
    'id' => 'friday',
    'before_widget' => '<div id="Friday">',
    'after_widget' => '</div><!-- #Friday-->',
  ) );

  register_sidebar( array(
    'name' => esc_html__('deal-saturday', 'spark'),
    'id' => 'saturday',
    'before_widget' => '<div id="Saturday">',
    'after_widget' => '</div><!-- #Saturday-->',
  ) );

// Coupons
  register_sidebar( array(
    'name' => esc_html__( 'Coupon 1', 'spark' ),
    'id' => 'coupon-1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    ) );

  register_sidebar( array(
    'name' => esc_html__( 'Coupon 2', 'spark' ),
    'id' => 'coupon-2',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    ) );

  register_sidebar( array(
    'name' => esc_html__( 'Coupon 3',  'spark' ),
    'id' => 'coupon-3',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    ) );

  register_sidebar( array(
    'name' => esc_html__( 'Coupon 4', 'spark' ),
    'id' => 'coupon-4',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  ) );

//  Events
  register_sidebar(array(
    'name' => esc_html__( 'Events', 'spark' ),
    'id' => 'events',
  ) );

//  More Deals
  register_sidebar(array(
    'name' => esc_html__( 'More Deals', 'spark' ),
    'id' => 'more-deals',
    'before_widget' => '<div id="more-deals">',
    'after_widget' => '</div>',
  ) );

//  Westword vote for us CTA
  register_sidebar( array(
    'name' => esc_html__( 'Westword Vote CTA', 'spark' ),
    'id' => 'vote4us',
    'before_widget' => '<div id="vote4us">',
    'after_widget' => '</div>',
  ) );

  //  June Flash sale CTA
  register_sidebar( array(
    'name' => esc_html__( 'Flash Sale CTA', 'spark' ),
    'id' => 'flash-sale',
    'before_widget' => '<div id="flash-sale">',
    'after_widget' => '</div>',
  ) );


}

add_action( 'widgets_init', '\sparkt\widgets_init' );
