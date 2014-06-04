<?php get_header(); ?>
	
	<div class="row">
		<section class="col col-sm-9 col-main" role="main">
	
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
					
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
					
				<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
				<p class="author"><?php _e( 'Published by', 'custom' ); ?> <?php the_author_posts_link(); ?></p>
				<p class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'custom' ), __( '1 Comment', 'custom' ), __( '% Comments', 'custom' )); ?></p>
					
				<?php the_content(); // Dynamic Content ?>
				
				<?php the_tags( __( 'Tags: ', 'custom' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				
				<p><?php _e( 'Categorised in: ', 'custom' ); the_category(', '); // Separated by commas ?></p>
				
				<p><?php _e( 'This post was written by ', 'custom' ); the_author(); ?></p>
				
				<?php // edit_post_link(); // Always handy to have Edit Post Links available ?>
				
				<?php comments_template(); ?>
					
			</article>
				
<?php endwhile; ?>
			
<?php else: ?>
			
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'custom' ); ?></h1>
			</article>
			
<?php endif; ?>
		</section>
	
		<?php get_sidebar(); ?>
	</div><!-- row -->


<?php get_footer(); ?>