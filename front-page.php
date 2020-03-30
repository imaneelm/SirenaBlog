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
		 get_header();
	  ?>
       <div class="slides_Container">
			    <div class="owl-carousel owl-theme">
				<?php $last_blog= new WP_Query('type=post&posts_per_page=3');
				  if ( $last_blog -> have_posts() ):
	                 while ( $last_blog->have_posts() ):$last_blog->the_post();?>
		            <div class="item">
			     	<?php if( has_post_thumbnail() ): ?>
							<div class="standard-featured-slider background_image" style="background-image: url(<?php echo sirena_get_attachment(); ?>);"></div>
					<?php endif; ?>
					<div class="caption">
                     <h3><a class="title_slide" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					 <a class="read_more" href="<?php the_permalink();?>">read more</a>
					 </div>
					</div>						
	                <?php endwhile;?>
					<?php endif ?>
					<?php wp_reset_postdata();?>
			
					
			    </div>
		   </div>
           <div class="home-page-about">
		      <div class="img-d-cont">
			<?php if( sirena_get_attachment() ):?>  
           <div class="image background_image" style="background-image:url(<?php echo sirena_get_attachment(); ?>);" > </div>
		   					<?php endif ?>

		   </div>
		   <div id="about-text">
		   <p><?php the_content();?></p>
		   </div>
		   </div>
		  
	      


		   
		   	  <?php get_footer();?>
			  


	</body>