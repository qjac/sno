<article id="post-<?php the_ID(); ?>">
	
<?php if (is_front_page()){ ?>

	<h1>
		<?php the_title(); ?>
	</h1>
	<div class="section-txt">
		<?php the_content(); ?>
	</div>

	<?php } elseif (is_archive() || is_search() || is_home()) { ?>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div>
		<?php the_excerpt(); ?>
	</div>
	<?php } else { ?>
	<h1>
		<?php the_title(); ?>
	</h1>
	<div>
		<?php the_content(); ?>
	</div>

<?php } ?>

</article>