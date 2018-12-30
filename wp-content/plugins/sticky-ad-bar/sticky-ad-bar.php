<?php
/*
Plugin Name: Sticky Ad Bar
Plugin URI: http://bonplangratos.fr/wp/plugins/sticky-ad-bar/
Author URI: http://bonplangratos.fr/
Donate link: http://bonplangratos.fr/wp/plugins/sticky-ad-bar/
Version: 1.3.1
Author: Bon Plan Gratos
License: GPL3
*/

/*
	Sticky Ad Bar
    Copyright (C) 2015 | BPG (Bon Plan Gratos)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    http://www.opensource.org/licenses/gpl-3.0.html
*/


require_once "sab_options.php";
require_once "sab_menu.php";
require_once "sab_settings.php";
require_once "sab_scripts.php";
require_once "sab_html.php";

function sab_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=sab_bar">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'sab_plugin_add_settings_link' );




 ?>