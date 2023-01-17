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
				<?php get_template_part('template-parts/sidebar-single'); ?>
				
				</div>
				<div class="col-sm-12 col-md-8 col-lg-9">
				<?php while(have_posts()): the_post(); ?>
			
				<?php get_template_part( 'template-parts/content-single'); ?>
				<?php	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
		
		<?php endif; ?>
	</main>
</div>

<?php get_footer();?>
