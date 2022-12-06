<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>


<h2>Search</h2>
<div class="page-list-hold-filter my-3 px-4 py-4">
<?php get_search_form();?>
</div>

<h2 class="mt-4">Related Resources</h2>
<div class= "page-list-hold-filter mb-5 px-4 py-4">
<?php
if(has_category("module")):
    $related = get_posts( array( 'category_name' => 'module', 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul> 
        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </li>
    </ul>   
<?php }
wp_reset_postdata();
else:
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul> 
        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </li>
    </ul>   
<?php }
wp_reset_postdata(); ?>
<?php endif;?>
</div>