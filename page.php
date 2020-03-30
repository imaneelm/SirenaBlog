<!DOCTYPE html>
<html <?php language_attributes();?>>
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
	
	  <?php get_header();?>
	 
	  
	       
	
	 
	   <div class="content">
	
       <?php  if ( have_posts() ):?> 
	                    <?php while ( have_posts() ):the_post();?>
						
						<?php get_template_part('template-parts/content','page');?>
					
	                <?php endwhile;?>
					<?php endif ?>

	   </div>

	   

	  <?php get_footer();?>


	</body>