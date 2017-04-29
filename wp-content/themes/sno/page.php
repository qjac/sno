<?php get_header(); ?>

<body>
	<main id="interior-main" class="equalhi">
		<!-- cn here is the WP loop... -->
	       <?php while ( have_posts() ) : the_post(); ?>
	     
	     <!-- cn here we use a template called content.php to  make things more modular. -->
	           <?php
           get_template_part( 'content' );
	           ?>
	        
	      <?php endwhile; ?>
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>