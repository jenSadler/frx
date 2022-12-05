<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>

<?php

$args = array(
		'taxonomy' => 'category',
		'orderby' => 'term_order',
		'order'=>'ASC',
        'hide_empty'    => '0',
		'hierarchical' =>'1',
		'walker'=> new Walker_Simple_Example,
		'title_li'           => __( '' )
  );
  ?>

<?php wp_list_categories($args); ?>

<?php
class Walker_Simple_Example extends Walker_Category {  

function start_lvl(&$output, $depth=1, $args=array()) {  
	$output .= "\n<ul class=\"cat-list\">\n";  
}  

function end_lvl(&$output, $depth=0, $args=array()) {  
	$output .= "</ul>\n";  
}  

function start_el(&$output, $item, $depth=0, $args=array()) {  
	if($depth == 0){
		$output .= "<h2>".$item->name."</h2>";
	}
	else{
		$output .= "<li class=\"item\"><a class=\"cat-list_item\" href=\"#!\" data-slug=\"".$item->slug . "\">".$item->name."</a>";
	}
}  

function end_el(&$output, $item, $depth=0, $args=array()) {  
	$output .= "</li>\n";  
}  
}  ?>