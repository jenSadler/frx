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

<!-- Default checked -->


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
<h3 class="cat-title"> Category Filter Settings</h3>
<ul class="cat-list my-4 mx-0 px-1 py-0">
<li class="my-2">
<div class="custom-control custom-switch">
	<div class="form-check form-switch">
		<input type="checkbox" class="form-check-input" id="cat-additive" checked>
		<label class="form-check-label" for="cat-additive">Addtive</label>
	</div>
</div>
		</li>


	<?php $page_for_posts = get_option( 'page_for_posts' );?>
<li class="my-2"><a class="btn btn-sm btn-primary"href="<?php echo esc_attr( esc_url( get_page_link( $page_for_posts ) ) ) ?>">Reset Search</a></li></ul>
<?php wp_list_categories($catargs); ?>
		</div>

<h2>Tags</h2>
<div class="page-list-hold-filter px-4 py-4">

<h3 class="cat-title"> Tag Filter Settings</h3>

<ul class="cat-list my-4 mx-0 px-1 py-0">
<li class="my-2">
<div class="custom-control custom-switch">
	<div class="form-check form-switch">
		<input type="checkbox" class="form-check-input" id="tag-additive" checked>
		<label class="form-check-label" for="tag-additive">Addtive</label>
	</div>
</div>
		</li>
		<li class="my-2"><a class="btn btn-sm btn-primary"href="<?php echo esc_attr( esc_url( get_page_link( $page_for_posts ) ) ) ?>">Reset Search</a></li></ul>

<h3 class="cat-title"> By Tag</h3>
<ul class="cat-list tag-list my-4 mx-0 px-1 py-0">
	<?php
	if ( $tags ) :
		foreach ( $tags as $tag ) : ?>

			<li class="item my-0 mx-0 px-0 py-0">
			<input type="checkbox" class="btn-check tag-list-item" name="tag-value" id="<?php echo $tag->slug ?>" value="<?php echo $tag->slug ?>" autocomplete="off">
			<label class="btn btn-outline-primary" for="<?php echo $tag->slug ?>"><?php echo $tag->name ?></label>
			</li>
			
		<?php endforeach; ?>
	<?php endif; ?>
	
	</ul>


</div>
<?php
class Walker_Simple_Example extends Walker_Category {  

function start_lvl(&$output, $depth=1, $args=array()) {  
	$output .= "\n<ul class=\"cat-list my-4 mx-0 px-1 py-0\">\n";  
}  

function end_lvl(&$output, $depth=0, $args=array()) {  
	$output .= "</ul>\n";  
}  

function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {  
	if($depth == 0){
		$output .= "<h3 class=\"cat-title\">".$item->name."</h3>";
	}
	else{
		$output .= "<li class=\"item my-2\">";
		$output .= "<label for=\"".$item->slug ."\"><input type=\"checkbox\" id=\"".$item->slug ."\" name=\"cat-value\" value=\"".$item->slug ."\" class=\"cat-list-item\">";
		$output .= "<span class=\"cat-checkbox-item\"> ".$item->name."</span></label>";
	}	$output .= "</li>";
}  

function end_el(&$output, $item, $depth=0, $args=array()) {  
	$output .= "</li>\n";  
}  
}  ?>