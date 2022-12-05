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
require_once FRX_DIR_PATH . '/inc/helpers/template-tags.php';

function frx_get_theme_instance(){
	\FRX_THEME\Inc\FRX_THEME::get_instance();
}

frx_get_theme_instance();
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


function filter_projects() {
	$catSlug = $_POST['category'];

  
	$ajaxposts = new WP_Query([
	  'post_type' => 'post',
	  'posts_per_page' => -1,
	  'category_name' => $catSlug,
	  'orderby' => 'menu_order', 
	  'order' => 'desc',
	]);
	$response = '';
  
	if($ajaxposts->have_posts()) {
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= get_template_part('template-parts/content');
	  endwhile;
	} else {
	  $response = 'empty';
	}
  
	echo $response;
	exit;
  }

  


 ?>