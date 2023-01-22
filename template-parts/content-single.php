<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>
<div class="hold-header">
<h1 id="main-header" class="mt-3"><?php the_title() ?> </h1>
<?php  echo do_shortcode('[append_save_button]');?></h1>
</div>

<?php the_content();?>

<div class="cat-tags">
    <h2>Tags</h2>
<?php get_template_part( 'template-parts/pills-tag' ); ?>
 <h2>Categories</h2>
<?php get_template_part( 'template-parts/pills-cat' ); ?>

</div>

