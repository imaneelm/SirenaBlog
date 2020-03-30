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
        Template Name: gallery page
       */
		 get_header();
	  ?>
	  


	
	
 		 
		
				<span id="myGallery"><?php the_title();?></span>
	               <?php  if ( have_posts() ):?> 
				         
	                    <?php while ( have_posts() ):the_post();?>
		            
					<?php the_content();?>				
	                <?php endwhile;?>
					<?php endif ?>
		

		
    <?php get_footer();?>
</body>
	
<!--
<script>	
	
	var sIndex = 0;
Slide(sIndex);

function plusSlides(n) {
  Slide(sIndex += n);
}

function currentSlide(n) {
  Slide(sIndex = n);
}

function Slide(n) {
  var i;
  var slides = document.getElementsByClassName("Slider");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {sIndex = 1}
  if (n < 1) {sIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[sIndex-1].style.display = "block";
  dots[sIndex-1].className += " active";
  captionText.innerHTML = dots[sIndex-1].alt;
}
</script>
-->