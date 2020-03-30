<div class="post post-video" id="post-<?php the_ID();?>">	
	
<h3><a class="title" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<?php 
    echo sirena_get_enbedded_media(array('video','iframe'));
?>	
<span >Posted on <?php the_time('D M Y');?> / in <?php the_category(',');?> / <a href="<?php comments_link();?>"><?php comments_number('0','1','%');?> </a> comments</span>
<?php edit_post_link()?>
<div> <?php the_excerpt();?></div>
<a href="<?php the_permalink(); ?>" class="more-link"><?php _e( 'Read More' ); ?></a>
		
</div>		