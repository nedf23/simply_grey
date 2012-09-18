<?php
/*
Template Name: default_page
*/

get_header()
?>

<!-- Check to make sure there is a post. -->
<?php if (have_posts()) : ?>
	
	<!-- Collects the information for the current post. -->
	<?php the_post() ?>

	<article>	

		<!-- The post title. -->
		<h2><?php the_title() ?></h2>

		<!-- The post content. -->
		<?php the_content(); ?>

		<!-- The post tags. -->
		<div class="metadata">
			<?php the_tags('Tags: ', ', ') ?>
		</div>

	</article>

<!-- No post found. -->
<?php else : ?>

	<h2>Nothing Found</h2>

<?php endif; ?>

<?php get_footer() ?>