<?php
function img_url(){
    echo get_template_directory_uri() . "/img/";
}
function img_mp3(){
    echo get_template_directory_uri() . "/mp3/";
}
add_editor_style( array( 'assets/css/editor-style.css', "" ) );

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
) );