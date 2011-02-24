<?php get_header(); ?>

	<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
		<!--Wigitized 'Alert' for the home page -->
	<?php endif ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
		<div id="post-<?php the_ID(); ?>" class="post">
			<div class="grid_1 alpha date" style="text-align:right">
				<div class="day"><?php echo get_the_time('d'); ?></div>
				<div class="month"><?php echo get_the_time('M'); ?></div>
				<div class="year"><?php echo get_the_time('Y'); ?></div>
			</div>
			<div class="grid_12 omega">
				<div class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
				<div class="meta">
					<span class="tags"><?php the_category(', ')?></span>
					<span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
				</div>
				<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
				<div class="content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div>
				<?php comments_template( '', true ); ?>
				
				
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div>
			</div>
		</div>
		
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong>There has been an error.</strong></p>
			<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--noResults-->
	<?php endif; ?>
	
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
