<div class="post" id="post-<?php the_ID();?>">	
		
<?php edit_post_link();?>
		<?php 
			$link = sirena_grab_url();
			the_title( '<h3 id="post-link"><a class="title" href="' . $link . '" target="_blank">', '</a></h3>');
		?>
		 <span class="dashicons dashicons-admin-links"></span>			

					
</div>		