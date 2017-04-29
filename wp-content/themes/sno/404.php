<?php get_header(); ?>

<body>

	<main class="error-404 not-found">
					<h1><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h1>
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>

					<?php get_search_form(); ?>
	</main>

<?php get_footer(); ?>