<?php get_header() ?>

<!-- Check to make sure there is a post. -->
<?php if (have_posts()) : ?>
	
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

	</article>	

	<article>

		<!-- The post comments with a form to add comments. -->
		<h2>Comments:</h2>
		<?php comments_template() ?>

	</article>

<!-- No post found. -->
<?php else : ?>

	<h2>Nothing Found</h2>

<?php endif; ?>

<?php get_footer() ?>