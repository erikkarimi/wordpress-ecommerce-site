<style type="text/css">

	
	
	#sab_wrap{
		margin:0 auto;
		<?php if  ( wp_is_mobile() ) { ?> /* width */
			width:<?php echo $sab_bar_width_mob; ?>%;
			<?php } else { ?>
			width:<?php echo $sab_bar_width; ?>%;
			<?php } ?>
		<?php if  ( wp_is_mobile() ) { ?> /* Height */
			height:<?php echo $sab_bar_height_mob; ?>;
			<?php } else { ?>
			height:<?php echo $sab_bar_height; ?>;
			<?php } ?>
		<?php if  ( wp_is_mobile() ) { ?> /* Background */
			background:<?php echo $sab_background_color_mob; ?>;
			<?php } else { ?>
			background:<?php echo $sab_background_color; ?>;
			<?php } ?>
		position: fixed;
		<?php if  ( wp_is_mobile() ) { ?> /* Position */
			<?php echo $sab_bar_position_mob; ?>;
			<?php } else { ?>
			<?php echo $sab_bar_position; ?>;
			<?php } ?>				
  		left: 0;
  		right: 0;
  		z-index: 99999;
	}
	#sab_bar_opn{
		margin:0 auto;
		position: fixed;
		background:#000;
		color: #fff;
		padding: 5px;
		display: none;
		<?php if  ( wp_is_mobile() ) { ?> /* Position */
			<?php echo $sab_bar_position_mob; ?>;
			<?php } else { ?>
			<?php echo $sab_bar_position; ?>;
			<?php } ?>	
		cursor: pointer;
	}
	
	#sab_elem{
		float: left;
		width: 3%;
		text-align: center;
		padding-top: 7px;

	}
	#sab_content{
		width: 95%;
		float: right;
		display: inline-block;
		text-align: center;
		margin-right:2%;
	}
	#sab_text{
		<?php if  ( wp_is_mobile() ) { ?> /* Color */
			color: <?php echo $sab_bar_text_color_mob; ?>;
			<?php } else { ?>
			color: <?php echo $sab_bar_text_color; ?>;
			<?php } ?>	
			
		<?php if  ( wp_is_mobile() ) { ?> /* Size */
			font-size: <?php echo $sab_bar_text_size_mob; ?>px;
			<?php } else { ?>
			font-size: <?php echo $sab_bar_text_size; ?>px;
			<?php } ?>					
		/*font-family: <?php echo $sab_bar_text_fontFamily; ?>;*/
		font-weight: normal;
		font-style: normal;
		margin: 0;
		padding: 0;
	}
	#sab_close_btn{
		cursor: pointer;
	}

</style>