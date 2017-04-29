<?php get_header(); ?>

<body>
	<main id="interior-main" class="equalhi">
		<h1>
	       <?php single_cat_title(); ?>
	       
	     </h1>
	     <div>
	     <?php echo category_description(); ?>
	   </div>
	     <!-- cn here is the WP loop... -->
	       <?php while ( have_posts() ) : the_post(); ?>
	     
	     <!-- cn here we use a template called content.php to  make things more modular. -->
	           <?php

	           get_template_part( 'content' );

	           ?>
	        
	      <?php endwhile; ?>

	     <?php   the_posts_pagination( array(
				'prev_text'          => __( 'Previous page' ),
				'next_text'          => __( 'Next page' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
			) );
	     ?>
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>