<?php
function setup_theme() {
	add_theme_support("menus");
	add_theme_support("html5");
	add_theme_support("post-thumbnails");

	register_nav_menus(array(
		"maim-menu" => "Main Menu",
	));
}


add_action("after_setup_theme", "setup_theme");
require_once get_template_directory().'/inc/scripts.php';
?>