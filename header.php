<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<title>
			<?php
				if (function_exists('is_tag') && is_tag())
				{
					single_tag_title('Tag: ');
					echo ' - ';
				}
				elseif (is_search())
				{
					echo 'Search for '.wp_specialchars($s).' - ';
				}
				elseif ( ! is_404() && (is_single() || is_page()))
				{
					wp_title('');
					echo ' - ';
				}
				elseif (is_404())
				{
					echo 'Not Found - ';
				}

				bloginfo('name');
			?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.fitvids.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('article').fitVids();
			})
		</script>
		<?php wp_head() ?>
	</head>
	<body>
		<div id="wrapper">
			<header>

				<!-- Gets the WordPress site name and links it to it's URL. -->
				<h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>

				<!-- Load the search form. -->
				<?php get_search_form() ?>

				<p class="hr_sep"></p>

				<!-- Load the page navigation into an unordered list. -->
				<nav>
					<?php wp_page_menu('show_home=1') ?>
				</nav>
			</header>
			<section>