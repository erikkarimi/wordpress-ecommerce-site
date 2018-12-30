<?php

function sab_admin_scripts_add() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('sab_bar_script',plugins_url('js/sab_bar_script.js',__FILE__));
	$screen = get_current_screen();	
	if($screen->id === 'ultimate-bar_page_sab_bar_plugin_ui'){ /*Pb ici*/
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'wp-color-picker');
    wp_enqueue_script( 'my-script-handle', plugins_url('/js/lpp_color_picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	}
}

add_action('admin_enqueue_scripts', 'sab_admin_scripts_add');

function sab_bar_script(){
  
	wp_enqueue_script('sab_bar_script1',plugins_url('js/sab_bar_script.js',__FILE__),array( 'jquery' ));
	wp_enqueue_script('sab_bar_script2',plugins_url('js/jquery.cookie.js',__FILE__),array( 'jquery' ));

}

add_filter('init','sab_bar_script');














 ?>