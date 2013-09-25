<?php
/*
	Plugin Name: Google Analytics Admin Exclude
	Description: Sets a <code>logged_in</code> variable when a user is logged in.
	Author: Kaspars Dambis
	Author URL: http://kaspars.net
	Version: 1.1
*/

add_action( 'wp_footer', 'ga_admin_exclude', 4 );

function ga_admin_exclude() {
	global $current_user;

	if ( is_user_logged_in() )
		printf( 
			'<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(["_setCustomVar", 1, "logged_in", "%s"]);</script>',
			$current_user->user_login 
		);
}


