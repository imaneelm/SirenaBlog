<div class="post" id="post-<?php the_ID();?>">	
<?php if( sirena_get_attachment() ): 
			$attachments = sirena_get_attachment(7);
			//var_dump($attachments);
?>
	  <div class="slideshow-container">
         <div class="slides ">
					
					<?php 
						$i = 0;
						foreach( $attachments as $attachment ): 
						
					?>
					
						<div class="slide_g fade background_image mySlides" style="background-image: url( <?php echo wp_get_attachment_url( $attachment->ID ); ?> );">
								<div class="image_caption"> <?php echo $attachments[$i]->post_excerpt; ?></div>
						</div>

					
					<?php $i++; endforeach; ?>
					
				</div>			
			</div>				
<?php endif; ?>

<h3><a class="title" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<span >Posted on <?php the_time('D M Y');?> / in <?php the_category(', ');?> / <a href="<?php comments_link();?>"><?php comments_number('0','1','%');?> </a> comments</span>
<?php edit_post_link()?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" class="more-link"><?php _e( 'Read More' ); ?></a>
</div>		
