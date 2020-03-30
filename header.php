<header class="background_image" style="background-image: url(<?php header_image(); ?>);">
       <div class="table ">
       <div class="table-cell ">
	   <?php if( function_exists( 'the_custom_logo' ) )?> 
		<div class="logo " > <?php the_custom_logo(); ?></div>
	  
	  <nav>  
	    <div class="bar" >
           <div class="bar1"></div>
           <div class="bar2"></div>
           <div class="bar3"></div>
        </div>
		<div class="nav_bar " >
         <?php 
		 wp_nav_menu( array(
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' => 'nav navbar-nav'
		) );	
		 ?>
		 </div>
       </nav>	
	   </div>
	   </div>
</header>