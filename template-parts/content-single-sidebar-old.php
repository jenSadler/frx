<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>

<?php/*

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

<h2>Filter</h2>
<div class="page-list-hold-filter px-4 py-4">
<?php wp_list_categories($catargs); ?>
		</div>

<h2>Tags</h2>
<div class="page-list-hold-filter px-4 py-4">

<h3 class="cat-title"> By Tag</h3>
<ul class="cat-list tag-list my-4 mx-0 px-1 py-0 comma-list">
	<?php
	if ( $tags ) :

		foreach ( $tags as $tag ) : ?>
    
             <?php $tag_link = get_tag_link( $tag->term_id);?>

			<li class="item my-0 mx-0 px-0 py-0">
            <a href="<?php echo esc_url( $tag_link )?>" title="<?php echo $tag->name?>"><?php echo $tag->name?></a>
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
        $category_link = get_category_link( $item->term_id);

       
		$output .= "<li class=\"item my-2\">";
		$output .=  "<a href=\"". esc_url( $category_link )."\" title=\"".$item->name."\">".$item->name."</a>";
		$output .= "</li>";
    }
}  

function end_el(&$output, $item, $depth=0, $args=array()) {  
	$output .= "</li>\n";  
 
} 
} */?>