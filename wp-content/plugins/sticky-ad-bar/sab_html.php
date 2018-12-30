<?php

add_filter('wp_footer',"sab_bar_html");

function sab_bar_html(){

		// $optionName = get_option('optionName');
	$sab_enable = get_option('sab_enable');
	$sab_mobile_only = get_option('sab_mobile_only');	
	$sab_vertical_position = get_option('sab_vertical_position');
	$sab_content = get_option('sab_content');
	$sab_background_color =get_option('sab_background_color');
	$sab_background_color_mob =get_option('sab_background_color_mob');	
	$sab_bar_width = get_option('sab_bar_width');
	$sab_bar_width_mob = get_option('sab_bar_width_mob');
	$sab_bar_height = get_option('sab_bar_height');
	$sab_bar_height_mob = get_option('sab_bar_height_mob');
	$sab_bar_width = get_option('sab_bar_width');
	$sab_bar_position = get_option('sab_bar_position');
	$sab_bar_position_mob = get_option('sab_bar_position_mob');
	$sab_cta_button = get_option('sab_button_cta');
	$sab_cta_email = get_option('sab_email_enable');
	$sab_gradient_color = get_option('sab_gradient_color');
	$sab_cta_button_url = get_option('sab_cta_button_url');
	$sab_cta_button_text = get_option('sab_cta_button_text');
	$sab_border_color = get_option('sab_border_color');
	$sab_border_width = get_option('sab_border_width');
	$sab_border_position =get_option('sab_border_position');
	$sab_close_position =get_option('sab_close_position');
	$sab_show_close_button =get_option('sab_show_close_button');
	$sab_bar_text_fontFamily = get_option('sab_bar_text_fontFamily');
	$sab_bar_text_color = get_option('sab_bar_text_color');
	$sab_bar_text_color_mob = get_option('sab_bar_text_color_mob');
	$sab_bar_text_size = get_option('sab_bar_text_size');
	$sab_bar_text_size_mob = get_option('sab_bar_text_size_mob');
	$sab_bar_email_placeholder = get_option('sab_bar_email_placeholder');
	$sab_bar_email_submit_text = get_option('sab_bar_email_submit_text');
	$sab_bar_email_mailchimp_apikey = get_option('sab_bar_email_mailchimp_apikey');
	$sab_bar_email_mailchimp_listid = get_option('sab_bar_email_mailchimp_listid');


	if (get_option('sab_enable')=='Enable') {
		if (get_option('sab_mobile_only')=='Enable') {
			if  ( wp_is_mobile() ) {
				include 'sab_bar.html';
			}			
		} else {
			include 'sab_bar.html';			
		}				

	include 'sab_bar_style.php';
		
	}

	?>




	<?php

}

?>