<aside class="equalhi">
	<div class="secondary-nav">
		<?php
		  if($post->post_parent)
		  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
		  else
		  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		  if ($children) { ?>
		  <ul>
		  <?php echo $children; ?>
		  </ul>
		<?php } ?>
	</div>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside>




