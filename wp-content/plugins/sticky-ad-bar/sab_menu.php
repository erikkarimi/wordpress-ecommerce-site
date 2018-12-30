<?php

// Adding menu page
add_action('admin_menu','sab_admin_menupage');
function sab_admin_menupage(){

	add_menu_page( 'Ad bar', "Sticky Ad Bar",'administrator', 'sab_bar','sab_bar_plugin_ui','dashicons-tablet');
	/* add_submenu_page( 'sab_bar', 'Ad Bar', 'Settings', 'administrator', 'sab_bar_plugin_ui', 'sab_bar_plugin_ui' );*/
	/* BPG add_submenu_page( 'sab_bar', 'MailChimp Settings', 'MailChimp Settings', 'administrator', 'sab_mailchimp', 'add_sab_mailchimp' ); */
	/* BPG add_submenu_page( 'sab_bar', 'Subscribers-List', 'Subscribers-List', 'administrator', 'sab_list', 'add_sab_subscribers_list_menu' ); */
	
}





 ?>