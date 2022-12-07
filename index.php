<?php
/**
 * The main template file
 * 
 * @package frx

 */
?>
<?php 
  $projects = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => -1,
    'order_by' => 'date',
    'order' => 'desc',
  ]);
?>


<?php get_header(); ?>

<div id="primary">
		<main id="main" class="site-main mt-1" role="main">
			<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-5 col-lg-4 col-xl-3"> 
				<?php if(is_category()):?>
					CATEGORY<?php get_template_part('template-parts/content-category-sidebar'); ?>
				<?php else: ?>
				<?php get_template_part('template-parts/content-sidebar'); ?>
				<?php endif?>
				</div>
				<div class="col-sm-12 col-md-7 col-lg-8 col-xl-9">
  				
				
				<h1>Resources</h1>
				
			<?php
			if($projects->have_posts()):
				?>
				<div class="row project-tiles">
				<?php 
					
					 
					while($projects->have_posts()) : $projects->the_post();
				?>
				
				<?php get_template_part('template-parts/content'); ?>
				
				<?php 
					endwhile;
				?>
			</div>	
			<?php wp_reset_postdata(); ?>	
			<?php else: ?>
				
			<?php get_template_part('template-parts/content-none'); ?>
			<?php endif;?>	
			</div>
			</div>
		</main>
	</div>

<?php

get_footer();?>
