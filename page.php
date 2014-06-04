<?php get_header(); ?>
	
	<div class="row">
		<section class="col col-sm-9 col-main" role="main">
	
			<h1><?php the_title(); ?></h1>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<?php the_content(); ?>
				
				<?php comments_template( '', true ); // Remove if you don't want comments ?>
				
				<?php // edit_post_link(); ?>
				
			</article>
			
<?php endwhile; ?>
		
<?php else: ?>
		
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'custom' ); ?></h2>
			</article>
		
<?php endif; ?>
		
		</section>

		<?php get_sidebar(); ?>
	</div><!-- row -->

<?php get_footer(); ?>