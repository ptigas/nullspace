<?php get_header(); ?>
	<div style="height:40px">
		<div class="grid_1 alpha date" style="height:2px">			
		</div>
		<div class="grid_12 omega">
			<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
			<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
			<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
			<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
				Blog Archives
			<?php endif; ?>
		</div>		
	</div>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
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
				<div class="content">
				<?php the_excerpt(); //the_content(__('Read more'));?>
				</div>
			</div>
		</div>			
	<?php endwhile; else: ?>
		<div class="post">
			<div class="grid_1 alpha date" style="height:2px">	
			</div>
			<div class="grid_12 omega">
				<div class="no-results">
					<p><strong>There has been an error.</strong></p>
					<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
					<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
				</div><!--noResults-->
			</div>
		</div>				
	<?php endif; ?>
	<div class="navigation"><?php posts_nav_link(); ?></div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>