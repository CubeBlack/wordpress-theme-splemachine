<?php
function img_url(){
    echo get_template_directory_uri() . "/img/";
}
function mp3_url(){
    echo get_template_directory_uri() . "/mp3/";
}
function css_url(){
    echo get_template_directory_uri() . "/css/";
}
function js_url(){
    echo get_template_directory_uri() . "/js/";
}
add_editor_style( array( 'assets/css/editor-style.css', "" ) );

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
) );