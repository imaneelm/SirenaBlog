<!DOCTYPE html>
<html>
 <head>
         <title> <?php bloginfo('name'); ?></title>
	     <meta charset=<?php bloginfo('charset'); ?>>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="profile" href="http://gmpg.org/xfn/11">
		 <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		 <?php endif; ?>
		 <?php wp_head(); ?>	
	</head>
	
	<body>
	
	  <?php get_header();?>
	  
	   <div class="content">
        	  <?php get_sidebar();?>

	   <div class="new_posts">
       <?php  if ( have_posts() ):?> 
	                    <?php while ( have_posts() ):the_post();?>
						
						<?php get_template_part('template-parts/content',get_post_format());?>
					
	                <?php endwhile;?>
					<div class="pagination">
					   <div class="pagination-links">
                             <?php next_posts_link('  « Older posts') ?>
							 <span class="pagination-previous">
                             <?php previous_posts_link(' Newer posts »') ?>
						     </span>
						
					    </div>	
					</div>
					<?php endif ?>
	   </div>
	   </div>
        <?php comments_template()?>

	  <?php get_footer();?>
	  	
	</body>