<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>

<?php

$catargs = array(
		'taxonomy' => 'category',
		'orderby' => 'term_order',
		'order'=>'ASC',
        'hide_empty'    => '1',
		'hierarchical' =>'1',
		'walker'=> new Walker_Simple_Example,
		'title_li'           => __( '' ),
		'exclude'=>'1'
  );

  
	  $tags = get_tags('post_tag'); //taxonomy=post_tag
	  
	  


?>
<h2>Search</h2>
<div class="page-list-hold-filter px-4 py-4">
<?php get_search_form();?>
</div>
<!--
<h2>Tags</h2>

<div class="page-list-hold-filter px-4 py-4">
	<ul class="tag-list comma-list">
	<?php
	if ( $tags ) :
		foreach ( $tags as $tag ) : ?>
			<li class="item"><a class="tag-list_item btn btn-primary button-sm mx-1 my-1 tag-list-button " href="#"  data-slug="<?php echo $tag->slug ?>"><?php echo $tag->name; ?></a></li>
		<?php endforeach; ?>
	<?php endif; ?>
	
	</ul>
</div> -->
<h2>Filter</h2>
<div class="page-list-hold-filter px-4 py-4">
	<h3 class="cat-title"> All Projects </h3>
	<?php $page_for_posts = get_option( 'page_for_posts' );?>
	<ul><li><a href="<?php echo esc_attr( esc_url( get_page_link( $page_for_posts ) ) ) ?>"><?php echo (get_the_title( get_option('page_for_posts', true) ));?></a></li></ul>
<?php wp_list_categories($catargs); ?>
</div>
<?php
class Walker_Simple_Example extends Walker_Category {  

function start_lvl(&$output, $depth=1, $args=array()) {  
	$output .= "\n<ul class=\"cat-list\">\n";  
}  

function end_lvl(&$output, $depth=0, $args=array()) {  
	$output .= "</ul>\n";  
}  

function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {  
	if($depth == 0){
		$output .= "<h3 class=\"cat-title\">".$item->name."</h3>";
	}
	else{
		$output .= "<li class=\"item\">";
		$output .= "<input type=\"checkbox\" id=\"".$item->slug ."\" name=\"cat-value\" value=\"".$item->slug ."\" class=\"cat-list_item\">";
		$output .= "<label for=\"vehicle1\"> ".$item->name."</label>";
	}	$output .= "</li>";
}  

function end_el(&$output, $item, $depth=0, $args=array()) {  
	$output .= "</li>\n";  
}  
}  ?>