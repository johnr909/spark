<?php

namespace sparkt;
 
function dashboard_welcome() {
 
    if( !get_option( 'triggered_welcome' ) ) {
        $message = sprintf( __( 'Welcome to the Spark WP Bootstrap Starter Theme', 'spark' ) );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                <p>%1$s</p>
            </div>',
            $message
        );
        add_option( 'triggered_welcome', '1', '', 'yes' );
    }

}

add_action( 'admin_notices', '\sparkt\dashboard_welcome' );
