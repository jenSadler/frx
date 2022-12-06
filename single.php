<?php
/**
 * The main template file
 * 
 * @package frx

 */
?>

<?php get_header(); ?>
<div id="primary">
	<main id="main" class="site-main mt-5" role="main">
		
	<?php if(have_posts()): ?>
			
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-3"> 
				<?php get_template_part('template-parts/content-single-sidebar'); ?>
				
				</div>
				<div class="col-sm-12 col-md-8 col-lg-9">
				<?php while(have_posts()): the_post(); ?>
			
					<h1 class="page-title">
					<?php the_title() ?> </h1>
					<?php the_content();?>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
		
		<?php endif; ?>
	</main>
</div>

<?php get_footer();?>
