<?php

//options functionality will be here soon
//Options to add
//    Enable/Disable property
// 1. Width/Height properties
// 2. Color properties  bg/text
// 3. Text input
// 4. Logo placement
// 5. Enable/Disable email subscription field
// 6. Subscription options Database/Mailchimp
// 7. Custom link button
// 8. Enable/Disable  close button property 
// 9. Position of the Bar


register_activation_hook(__FILE__,'sab_activating_options');
function sab_activating_options(){
	//add_option('optionName','defaultValue');
	add_option('sab_enable','Enable');
	add_option('sab_mobile_only','Enable');	
	add_option('sab_content','Put Some Content Here!');
	add_option('sab_background_color','#000');
	add_option('sab_background_color_mob','#000');	
	add_option('sab_bar_position','');
	add_option('sab_bar_position_mob','');
	add_option('sab_button_cta');
	add_option('sab_email_enable');
	add_option('sab_gradient_color');
	add_option('sab_cta_button_url');
	add_option('sab_cta_button_text','Click Here');
	add_option('sab_border_color','#000');
	add_option('sab_border_width','3px');
	add_option('sab_border_position','top');
	add_option('sab_close_position','');
	add_option('sab_show_close_button');
	add_option('sab_vertical_position','left');
	add_option('sab_bar_width','100');
	add_option('sab_bar_width_mob','100');	
	add_option('sab_bar_height','5');
	add_option('sab_bar_height_mob','5');
	add_option('sab_bar_text_color','black');
	add_option('sab_bar_text_color_mob','black');
	add_option('sab_bar_text_size','14px');
	add_option('sab_bar_text_size_mob','14px');	
	add_option('sab_bar_text_fontFamily','arial');
	add_option('sab_bar_email_placeholder');
	add_option('sab_bar_email_submit_text');
	
}



add_action('wp_head','sab_sett_to_head');
function sab_sett_to_head(){

	// $optionName = get_option('optionName');
	$sab_enable = get_option('sab_enable');
	$sab_mobile_only = get_option('sab_mobile_only');	
	$sab_vertical_position = get_option('sab_vertical_position');
	$sab_content = get_option('sab_content');
	$sab_background_color =get_option('sab_background_color');
	$sab_background_color_mob =get_option('sab_background_color_mob');	
	$sab_bar_height = get_option('sab_bar_height');
	$sab_bar_height_mob = get_option('sab_bar_height_mob');
	$sab_bar_width = get_option('sab_bar_width');
	$sab_bar_width_mob = get_option('sab_bar_width_mob');
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
	

}

add_action('admin_init','sab_reg_sett');
function sab_reg_sett(){
	//register_setting( 'sab_setting_group', $option_name);
	register_setting( 'sab_setting_group', 'sab_enable');
	register_setting( 'sab_setting_group', 'sab_mobile_only');		
	register_setting('sab_setting_group','sab_content');
	register_setting('sab_setting_group','sab_background_color');
	register_setting('sab_setting_group','sab_background_color_mob');
	register_setting('sab_setting_group','sab_bar_height');
	register_setting('sab_setting_group','sab_bar_height_mob');
	register_setting('sab_setting_group','sab_bar_position');
	register_setting('sab_setting_group','sab_bar_position_mob');	
	register_setting('sab_setting_group','sab_button_cta');
	register_setting('sab_setting_group','sab_email_enable');
	register_setting('sab_setting_group','sab_gradient_color');
	register_setting('sab_setting_group','sab_cta_button_url');
	register_setting('sab_setting_group','sab_cta_button_text');
	register_setting('sab_setting_group','sab_border_color');
	register_setting('sab_setting_group','sab_border_width');
	register_setting('sab_setting_group','sab_border_position');
	register_setting('sab_setting_group','sab_close_position');
	register_setting('sab_setting_group','sab_show_close_button');
	register_setting('sab_setting_group','sab_vertical_position');
	register_setting('sab_setting_group','sab_bar_width');
	register_setting('sab_setting_group','sab_bar_width_mob');	
	register_setting('sab_setting_group','sab_bar_text_color');
	register_setting('sab_setting_group','sab_bar_text_color_mob');
	register_setting('sab_setting_group','sab_bar_text_size');
	register_setting('sab_setting_group','sab_bar_text_size_mob');
	register_setting('sab_setting_group','sab_bar_text_fontFamily');
	register_setting('sab_setting_group','sab_bar_email_placeholder');
	register_setting('sab_setting_group','sab_bar_email_submit_text');

}

register_activation_hook(__FILE__,'sab_mailchimp_activating_options');
function sab_mailchimp_activating_options(){

	add_option('sab_bar_email_mailchimp_apikey');
	add_option('sab_bar_email_mailchimp_listid');
}



add_action('wp_head','sab_mailchimp_sett_to_head');
function sab_mailchimp_sett_to_head(){

	$sab_bar_email_mailchimp_apikey = get_option('sab_bar_email_mailchimp_apikey');
	$sab_bar_email_mailchimp_listid = get_option('sab_bar_email_mailchimp_listid');

}

add_action('admin_init','sab_mailchimp_reg_sett');
function sab_mailchimp_reg_sett(){
	//register_setting( 'sab_setting_group', $option_name);

	register_setting('sab_mailchimp_setting_group','sab_bar_email_mailchimp_apikey');
	register_setting('sab_mailchimp_setting_group','sab_bar_email_mailchimp_listid');

}








 ?>