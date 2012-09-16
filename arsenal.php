<?php
/*
Template Name: Arsenal
*/
?>

<?php get_header() ?>

<?php if (have_posts()) : ?>
	
	<?php the_post() ?>
	<article>	
		<h2><?php the_title() ?></h2>
		<?php the_content(); ?>
		<div class="metadata"><?php the_tags('Tags: ', ', ') ?></div>
	</article>
<?php else : ?>
	<h2>Nothing Found</h2>
<?php endif; ?>

<?php get_footer() ?>