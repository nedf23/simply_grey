<?php get_header() ?>

<!-- Check to make sure there are posts. -->
<?php if (have_posts()) : ?>

	<!-- The WordPress Loop -->
	<?php while (have_posts()) : ?>
		
		<!-- Collects the information for the current post. -->
		<?php the_post() ?>

		<article>

			<!-- The link to the post and it's title. -->
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

			<!-- The author and date (January 1st, 2012) of the post. -->
			<div class="metadata">
				<?php the_author() ?>, 
				<?php the_time('F jS, Y') ?>
			</div>

			<!-- The post content. -->
			<?php the_content(); ?>

			<!-- The post tags. -->
			<div class="metadata">
				<?php the_tags('Tags: ', ', ') ?>
			</div>

			<!-- The post comments count that links to post comments. -->
			<div class="comment_count">
				<?php comments_popup_link('No Comments', '1 Comment', '% Comments') ?>
			</div>

		</article>
		
	<?php endwhile; ?>

	<!-- Post Navigation -->
	<div class="post_links">
		<span class="post_link_left">
			<?php next_posts_link('<< Older Entries') ?>
		</span>
		&nbsp;
		<span class="post_link_right">
			<?php previous_posts_link('Newer Entries >>') ?>
		</span>
	</div>

<!-- No posts found. -->
<?php else : ?>

	<h2>Nothing Found</h2>

<?php endif; ?>

<?php get_footer() ?>