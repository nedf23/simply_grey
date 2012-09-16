<?php
/*
Template Name: Tutorials
*/
?>
<?php get_header() ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>
<?php query_posts('category_name=tut&posts_per_page=3&paged='.$paged) ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : ?>
		<?php the_post() ?>
		<article>	
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<div class="metadata">
				<?php the_author() ?>, 
				<?php the_time('F jS, Y') ?>
			</div>
			<?php the_content(); ?>
			<div class="metadata">
				<?php the_tags('Tags: ', ', ') ?>
			</div>
			<div class="comment_count"><?php comments_popup_link('No Comments', '1 Comment', '% Comments') ?></div>
		</article>
	<?php endwhile; ?>
	<div class="post_links">
		<span class="post_link_left"><?php next_posts_link('<< Older Entries') ?></span>&nbsp;
		<span class="post_link_right"><?php previous_posts_link('Newer Entries >>') ?></span>
	</div>
<?php else : ?>
	<h2>Nothing Found</h2>
<?php endif; ?>
<?php wp_reset_query() ?>

<?php get_footer() ?>