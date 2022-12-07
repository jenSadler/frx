<?php
/**
 * Template part for displaying cards
 * 
 * @package frx
 */
 

$cat_html="";
if(has_category()) {
    $categories = get_the_category();
    $cat_html = '<div class="post_cats">';
    foreach ( $categories as $cat ) {
        $cat_link = get_category_link( $cat->term_id );
                
        $cat_html .= "<p title='{$cat->name}' alt='{$cat->name}' class='{$cat->slug} btn btn-primary button-sm mx-1 my-1 py-0 cat-button disabled'>";
        $cat_name = $cat->name;
        if(strlen($cat_name)>10){
            $cat_name = substr($cat_name,0,10) . "...";
        }
        $cat_html .= $cat_name."</a>";
    }
    $cat_html .= '</div>';
} 
 echo $cat_html;?>
 