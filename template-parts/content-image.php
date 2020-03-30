<div class="post" id="post-<?php the_ID();?>">	
<?php if( sirena_get_attachment() ): ?>
			
			<a class="standard-featured-link" href="<?php the_permalink(); ?>">
				<div class="standard-featured background_image" style="background-image: url(<?php echo sirena_get_attachment(); ?>);"></div>
			</a>
			
<?php endif; ?>
<div class="title-image-post">
<h3><a class="title " href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<div><span >Posted on <?php the_time('D M Y');?> / in <?php the_category(',');?> / <a href="<?php comments_link();?>"><?php comments_number('0','1','%');?> </a> comments</span></div>
</div>
<div class="image_caption"> <?php the_excerpt();?></div>

				
</div>		