<?php 

/**
 * Theme Functions
 * @package frx
 * */

?>

<?php

if(!defined('FRX_DIR_PATH')){
	define('FRX_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('FRX_DIR_URI')){
	define('FRX_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once FRX_DIR_PATH . '/inc/helpers/autoloader.php';

function frx_get_theme_instance(){
	\FRX_THEME\Inc\FRX_THEME::get_instance();
}

frx_get_theme_instance();

?>