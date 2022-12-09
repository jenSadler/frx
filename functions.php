<?php 

/**
 * Theme Functions
 * @package frx
 * */

 if(!defined('FRX_DIR_PATH')){
	define('FRX_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('FRX_DIR_URI')){
	define('FRX_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once (FRX_DIR_PATH . '/inc/helpers/autoloader.php');
require_once (FRX_DIR_PATH . '/inc/helpers/template-tags.php');
//require_once (FRX_DIR_PATH . '/inc/helpers/breadcrumbs.php');
//require_once (FRX_DIR_PATH . '/inc/helpers/ajax.php');


function frx_get_theme_instance(){
	\FRX_THEME\Inc\FRX_THEME::get_instance();
}

frx_get_theme_instance();


add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

function filter_projects() {
  get_template_part('template-parts/ajax'); } 


function get_breadcrumb() {
  get_template_part('template-parts/breadcrumbs');

}
?>