<?php
/**
 * Template part for displaying sidbar
 * 
 * @package frx
 */
?>

<h1 class="page-header"><?php the_title() ?> </h1>
<?php the_content();?>

<div class="mt-5 mb-5">
<?php get_template_part( 'template-parts/pills-tag' ); ?>
 
<?php get_template_part( 'template-parts/pills-cat' ); ?>
</div>

