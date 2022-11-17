<?php 

namespace sparkt;


function dealoFDay() {
  date_default_timezone_set( 'America/Denver' );

  $dayofweek = date( 'l' );

  switch ( $dayofweek ) {
    case "Sunday":
      dynamic_sidebar( 'deal-sunday' );
      break;
    case "Monday":
      dynamic_sidebar( 'deal-monday' );
      break;
    case "Tuesday":
      dynamic_sidebar( 'deal-tuesday' );
      break;
    case "Wednesday":
      dynamic_sidebar( 'deal-wednesday' );
      break;
    case "Thursday":
      dynamic_sidebar( 'deal-thursday' );
      break;
    case "Friday":
      dynamic_sidebar( 'deal-friday' );
      break;
    case "Saturday":
      dynamic_sidebar( 'deal-saturday' );
      break;
    default:
      echo "<a href='/deals/'>Deals</a>";
  }
}
