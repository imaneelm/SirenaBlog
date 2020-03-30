<div class="post" id="post-<?php the_ID();?>">	
		
<?php if( sirena_get_attachment() ): ?>
			
			<a  href="<?php the_permalink(); ?>">
				<div class="aside-post-image background_image" style="background-image: url(<?php echo sirena_get_attachment(); ?>);"></div>
			</a>
			
<?php endif; ?>

<h3 class="title-aside"><a class="title" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<span >Posted on <?php the_time('D M Y');?> / in <?php the_category(', ');?> / <a href="<?php comments_link();?>"><?php comments_number('0','1','%');?> </a> comments</span>
<?php edit_post_link()?>			
<?php the_excerpt(); ?>
<div class="more-link-aside"><a href="<?php the_permalink(); ?>" class="more-link "><?php _e( 'Read More' ); ?></a></div>

					
</div>		