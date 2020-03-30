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
	                    <?php while ( have_posts() ):the_post();
						
						get_template_part('template-parts/single',get_post_format());
					    the_post_navigation();
						
						 if(comments_open()):
					    comments_template();
						endif;
					
	                 endwhile;
					 endif ?>
	   </div>
	   </div>
 <?php get_footer();?>
 </body>
 </html>
	 
