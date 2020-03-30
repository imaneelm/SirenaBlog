<?php
   /*
     =============================
       include function-admin.php  
     =============================
   */	  
   require get_template_directory() . '/inc/function-admin.php';
   require get_template_directory() . '/inc/enqueue.php';
   require get_template_directory() . '/inc/theme-support.php';
   require get_template_directory() . '/inc/custom-post-type.php';
   require get_template_directory() . '/inc/widgets.php';
   require get_template_directory() . '/inc/shortcode.php';
   require get_template_directory() . '/inc/ajax.php';
    /*
	  ==================================
	          create a sidebar
	  ==================================
	 */
   if(function_exists('register_sidebar')){
	function sirena_sidebar(){
	register_sidebar(
    array(  'name'=>'sidebar',
			'id'=>'sidebar-1',
			'before_widget'=>'<div >',
			'after_widget'=>'</div>',
			'before_title'=>'<span >',
			'after_title'=>'</span>'
	));
	}
   }
	add_action('widgets_init','sirena_sidebar');
	
	
   if(function_exists('register_sidebar')){
	function sirena_footer(){
	register_sidebar(
    array(  'name'=>'footer',
			'id'=>'footer-1',
			'before_widget'=>'<div >',
			'after_widget'=>'</div>',
			'before_title'=>'<span >',
			'after_title'=>'</span>'
	));
	}
   }
	add_action('widgets_init','sirena_footer');
	
	
	
