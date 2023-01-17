<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>
<div class="hold-header">
<h1 id="main-header" class="mt-3"><?php the_title() ?> </h1>
<?php // echo do_shortcode('[append_save_button]');?></h1>
</div>

<?php the_content();?>

<div class="mt-5 mb-5">
<?php get_template_part( 'template-parts/pills-tag' ); ?>
 
<?php get_template_part( 'template-parts/pills-cat' ); ?>

</div>

