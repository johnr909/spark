<?php

namespace sparkt;

// hide the WordPress version in browser source 
function remove_wp_version() {
  return '';
}

add_filter('the_generator', '\sparkt\remove_wp_version' );
