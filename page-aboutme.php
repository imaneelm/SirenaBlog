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
	
	<body <?php body_class();?>>
	
	
	  <?php
        /*
        Template Name: about-me page
         */
	  get_header();?>
	  
	 <div class="about-me">
	                 <?php if( sirena_get_attachment() ) :?>  
		            <div class="about-me-img background_image" style="background-image:url(<?php  echo sirena_get_attachment(); ?>);" > </div>
					<?php endif ?>
					
					<span><?php the_title();?></span>
	               <?php  if ( have_posts() ):?> 
				         
	                    <?php while ( have_posts() ):the_post();?>
		            
					<?php the_content();?>				
	                <?php endwhile;?>
					<?php endif ?>
					
			
    </div>


	  <?php get_footer();?>
	  	

	
	

	</body>
	</html>