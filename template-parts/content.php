<?php
/**
 * Template part for displaying cards
 * 
 * @package frx
 */
 /*
$tag_html="";
$cat_html="";
if(has_tag()) {
$tags = get_the_tags();
$tag_html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	

        $tag_html .= "<p title='{$tag->name}'class='{$tag->slug} btn btn-primary button-sm mx-1 my-1 py-0 tag-button disabled'>";
        $tag_name = $tag->name;
        if(strlen($tag_name)>10){
            $tag_name = substr($tag_name,0,10) . "...";
        }
        $tag_html .= $tag_name."</a>";
}
$tag_html .= '</div>';
}

if(has_category()) {
    $categories = get_the_category();
    $cat_html = '<div class="post_cats">';
    foreach ( $categories as $cat ) {
        $cat_link = get_category_link( $cat->term_id );
                
        $cat_html .= "<p title='{$cat->name}'class='{$cat->slug} btn btn-primary button-sm mx-1 my-1 py-0 cat-button disabled'>";
        $cat_name = $cat->name;
        if(strlen($cat_name)>10){
            $cat_name = substr($cat_name,0,10) . "...";
        }
        $cat_html .= $cat_name."</a>";
    }
    $cat_html .= '</div>';
} 

*/

?>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 post-list-blog-post my-3">
 

   <div class="card h-100">
   <a href="<?php the_permalink();?>"> 
    <?php 
        if(has_post_thumbnail()){
            the_post_thumbnail('thumbnail', ['class' => 'card-img-top', 'alt' => 'Feature image']); 
        }
      
        ?>
    </a>
        
        <div class="card-body">
                <a href="<?php the_permalink();?>"><h2 class="card-title"><?php the_title();?></h2></a>
                <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
        <?php /*
        <div class="card-footer">
				<h3 class="card-info-title">Tags:</h3>
                <?php get_template_part( 'template-parts/pills-tag' ); ?>
                <h4 class="card-info-title">Categories:</h4>
				<?php get_template_part( 'template-parts/pills-cat' ); ?>
                
                <?php // echo do_shortcode('[append_save_button]');?>
        </div>
         */?>
    </div>			
</div>