<?php
/**
 * Template part for displaying cards
 * 
 * @package frx
 */
 
$tag_html="";
$cat_html="";
if(has_tag()) {
$tags = get_tags();
$tag_html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	$tag_html .= "<p class='{$tag->slug} btn btn-primary button-sm mx-1 my-1 tag-button disabled'>";
	$tag_html .= "{$tag->name}</p>";
}
$tag_html .= '</div>';
}

if(has_category()) {
    $categories = get_the_category();
    $cat_html = '<div class="post_cats">';
    foreach ( $categories as $cat ) {
        $cat_link = get_category_link( $cat->term_id );
                
        $cat_html .= "<p title='{$cat->name}'class='{$cat->slug} btn btn-primary button-sm mx-1 my-1 cat-button disabled'>";
        $cat_name = $cat->name;
        if(strlen($cat_name)>10){
            $cat_name = substr($cat_name,0,10) . "...";
        }
        $cat_html .= $cat_name."</a>";
    }
    $cat_html .= '</div>';
} 



?>
<div class="col-sm-12 col-md-6 col-lg-4 post-list-blog-post my-3">
 

   <div class="card h-100">
   <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'title' => 'Feature image']); ?></a>
        
        <div class="card-body">
                <a href="<?php the_permalink();?>"><h5 class="card-title"><?php the_title();?></h5></a>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <?php echo $tag_html;?>
                <?php echo $cat_html;?>
        </div>
    </div>			
</div>