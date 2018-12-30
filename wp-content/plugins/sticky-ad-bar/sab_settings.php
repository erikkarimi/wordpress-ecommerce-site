<?php
//UI will go here

function sab_bar_plugin_ui(){ //UI function

	echo "<h1>Sticky Ad Bar: Display Options</h1>";
	?>
	<?php settings_fields( 'sab_setting_group' );?>
	<?php do_settings_sections( 'sab_setting_group' );
	
	?>


		<div id='sec_left'>
<div class='formLayout'>
<form action="options.php" method="post" >

	<?php settings_fields( 'sab_setting_group' );?>
	<?php do_settings_sections( 'sab_setting_group' );?>
	<br>
	<label for="sab_enable">Enable the bar: </label>
	<input class="checkbox" type="checkbox" name="sab_enable" value="Enable"
	<?php checked('Enable',get_option('sab_enable')); ?> >
	<br>
	<label for="sab_mobile_only">Show it on mobile ONLY: </label>
	<input class="checkbox" type="checkbox" name="sab_mobile_only" value="Enable"
	<?php checked('Enable',get_option('sab_mobile_only')); ?> >
	<br>	
	<label for="sab_show_close_button">Display a Close Button: </label>
	<input class="checkbox" type="checkbox" name="sab_show_close_button" value="Enable"
	<?php checked('Enable',get_option('sab_show_close_button')); ?> >
	<br>
	<br>
	<label> </label>
	<div class="colonne">Default</div>
	<div class="colonne">Mobile</div>	
	<br>
	<label for="sab_bar_position">Bar Position:</label>
	<select name="sab_bar_position">
		<option value="top:0px;"
		<?php selected('top:0px;',get_option('sab_bar_position')); ?>	> Top </option>
		<option value="bottom:0px;"
		<?php selected('bottom:0px;',get_option('sab_bar_position')); ?>	> Bottom </option>
	</select>
	<select name="sab_bar_position_mob">
		<option value="top:0px;"
		<?php selected('top:0px;',get_option('sab_bar_position_mob')); ?>	> Top </option>
		<option value="bottom:0px;"
		<?php selected('bottom:0px;',get_option('sab_bar_position_mob')); ?>	> Bottom </option>
	</select>
	<legend>bottom is advised</legend>
	<br>
	<label for='sab_background_color'>Color Background (#): </label>
	<input class='ub_color_picker' type="text" name="sab_background_color" value="<?php echo get_option('sab_background_color'); ?>">
	<input class='ub_color_picker' type="text" name="sab_background_color_mob" value="<?php echo get_option('sab_background_color_mob'); ?>">
	<legend>blank = transparency</legend>
	<br>
	<label for='sab_bar_height'>Bar Width (%):</label>
	<input type="number" name='sab_bar_width' value='<?php echo get_option('sab_bar_width'); ?>' placeholder='Enter value in %'>
	<input type="number" name='sab_bar_width_mob' value='<?php echo get_option('sab_bar_width_mob'); ?>' placeholder='Enter value in %'>
	<legend>put 100 if you're not sure</legend>
	<br>
	<label for='sab_bar_height'>Bar Height (px):</label>
	<input type="number" name='sab_bar_height' value='<?php echo get_option('sab_bar_height'); ?>' placeholder='Enter value in px'>
	<input type="number" name='sab_bar_height_mob' value='<?php echo get_option('sab_bar_height_mob'); ?>' placeholder='Enter value in px'>
	<legend>useful for responsive ads</legend>
	<br>
	<label for="sab_bar_text_size">Text Color (#): </label>
	<input class='ub_color_picker' type="text" name="sab_bar_text_color" value="<?php echo get_option('sab_bar_text_color'); ?>">
	<input class='ub_color_picker' type="text" name="sab_bar_text_color_mob" value="<?php echo get_option('sab_bar_text_color_mob'); ?>">
	<legend>ex input 'red' or '#ff0000'</legend>
	<br>
	<label for="sab_bar_text_size">Text Size (px): </label>
	<input type="number" name="sab_bar_text_size" value="<?php echo get_option('sab_bar_text_size'); ?>" placeholder='Enter value in px'>
	<input type="number" name="sab_bar_text_size_mob" value="<?php echo get_option('sab_bar_text_size_mob'); ?>" placeholder='Enter value in px'>
	<legend>if your make your own ad/link...</legend>
	<br>
	<br>
	<br>
	<br>	
	<hr>
	<br>
	<label for="sab_content">Paste your ad code here: </label>
	<!-- <textarea name="sab_content" placeholder='Enter Some text' width='200px' cols='20' rows="10" value="<?php //echo get_option('sab_content'); ?>"><?php //echo get_option('sab_content'); ?></textarea> -->
	<br>	
	<?php $settings = array('media_buttons'=> false,'sab_content','textarea_rows'=>10);
	$sab_content = get_option('sab_content');
 	wp_editor($sab_content,'sab_content',$settings); ?>
	<br>
	<br>
	<strong>Attention: </strong>Google Adsense do not permit to "place Google ads in a floating script that causes the ad to appear in a “sticky" position on the page as the user scrolls down". Please, check your program's ad placement policies.
	<br>
	<br/>
	<?php submit_button('Save Changes');  ?>		

</form>
</div>
</div>

		<div id='sec_right'>
				<h3>News</h3>
				<a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank"><img src="<?php echo plugins_url('images/Paris-bridge.jpg',__FILE__); ?>" class="rc_plugin_thumb" /></a>
				<p><a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank">Visit plugin's page for tips</a></p>
				<a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank"><img src="<?php echo plugins_url('images/paypal-donate.jpg',__FILE__); ?>" class="rc_plugin_thumb" /></a>
				<p><a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank">Buy us a café, give us 1€</a></p>
				<a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank"><img src="<?php echo plugins_url('images/help.jpg',__FILE__); ?>" class="rc_plugin_thumb" /></a>
				<p><a href="http://bonplangratos.fr/wp/plugins/sticky-ad-bar" target="_blank">Need help ? Contact us</a></p>
		</div>
		
		
<style type="text/css">
#rate_button{
		text-align: center;
		padding:8% 5% 8% 5%;
		background:#FFA635;font-size:22px;border:none;color:#fff; border-bottom:10px solid #E08A1C;
		text-decoration: none;
		border-radius: 10px;
		margin-top: 22px;
		font-size: 29px;
	}
	#rate_button:hover{
		background: #FF9918;

	}
	#rate_button:active{
		border: none;
		padding-top: 9%;
	}

	
	.formLayout
    {
        
        padding: 10px;
        width: 750px;
        margin: 10px;
    }
    
    .formLayout label 
    {
        display: block;
        width: 200px;
        float: left;
        margin-bottom: 10px;
        margin-left: 20px;
    }
    .formLayout legend 
    {
        display: block;
        width: 200px;
        float: left;
        margin-bottom: 10px;
        margin-left: 20px;
    }
    .formLayout input,select{
        display: block;
        width: 130px;
        float: left;
        margin-bottom: 10px;

    }
    .colonne{
        display: block;
        width: 130px;
        float: left;
		text-align:center;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: bold;

    }

    .formLayout textarea{
        float: left;
        margin-bottom: 10px;

    }
 
    .formLayout label
    {
        text-align: left;
		vertical-align: bottom;
        padding-right: 20px;
        font-size: 14px;
        font-weight: bold;
    }
 
    br
    {
        clear: left;
    }

    .checkbox, .radio
	{
		/* margin-left: 60px; */
    	width:15px !important;
    	height: 15px !important;
    }
	
	#img_ad{
			width:50%;
			height: 400px;
			display: inline-block;
			float: left;
			margin-top: 105px;
		}
	.rc_plugin_thumb{
			width: 200px;
			height: 100px;
			border:7px solid #fff;
			background: #fff;
		}	
	#sec_left{
		/* margin-top:100px;*/
		width:70%;
		display: inline-block;
		float: left;
	}
	#sec_right{
		/*margin-top:100px;*/
		width:20%;
		display: inline-block;
		float: right;
		background: #e3e3e3;
		padding: 20px;

	}
</style>


<?php

}




 ?>