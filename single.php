<?php get_header() ?>

<?php if (have_posts()) : ?>
	
	<?php the_post() ?>
	<article>	
		<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="metadata">
			<?php the_author() ?>, 
			<?php the_time('F jS, Y') ?>
		</div>
		<?php the_content(); ?>
		<div class="metadata"><?php the_tags('Tags: ', ', ') ?></div>
	</article>	
	<article>
		<h2>Comments:</h2>
		<?php comments_template() ?>
	</article>
<?php else : ?>
	<h2>Nothing Found</h2>
<?php endif; ?>

<?php get_footer() ?>