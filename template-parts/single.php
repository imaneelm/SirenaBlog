<div class="post" id="post-<?php the_ID();?>">	

<?php if( sirena_get_attachment() ): ?>
			
			
				<div class="standard-featured background_image" style="background-image: url(<?php echo sirena_get_attachment(); ?>);"></div>
			
			
<?php endif; ?>

<h3 class="title"><?php the_title();?></h3>
<span >Posted on <?php the_time('D M Y');?> / in <?php the_category(', ');?> / <a href="<?php comments_link();?>"><?php comments_number('0','1','%');?> </a> comments</span>
			
<?php the_content(); ?>

					
</div>		