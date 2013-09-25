<?php
/*
	Plugin Name: Google Analytics Admin Exclude
	Description: Sets a <code>logged_in</code> variable when a user is logged in.
	Author: Kaspars Dambis
	Author URL: http://kaspars.net
	Version: 1.0
*/

add_action( 'wp_footer', 'ga_admin_exclude' );

function ga_admin_exclude() {
	if ( is_user_logged_in() )
		echo '<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(["_setVar", "logged_in"]);</script>';
}


