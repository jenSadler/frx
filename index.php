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
				<?php if(is_page() && !is_home() && !is_front_page()):?>
					<header class="mb-5">
						<h1 class="page-title screen-reader-text">
						<?php single_post_title(); ?>
						</h1>
					</header>
				<?php endif; ?>
			<?php while(have_posts()): the_post(); 

			the_content();
			
			
			
				endwhile; ?>
			</div>
	<?php endif; ?>
	</main>
</div>

<?php get_footer();?>
