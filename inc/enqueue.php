<?php
/*
   ============================
      ADMIN enqueue functions
   ============================
*/
function sirena_load_admin_scripts( $hook ){
	//echo $hook;
	if ('toplevel_page_Sirena_Theme'==$hook || 'sirena_page_sirena_home_options' ==$hook)
	{
	wp_register_style('sirena_admin',get_template_directory_uri() . '/css/sirena-admin.css',array(),'1.0.0','all');
	wp_enqueue_style('sirena_admin');
	
	 wp_enqueue_media();
	wp_register_script('sirena-admin-script',get_template_directory_uri() . '/js/sirena-admin.js',array('jquery'),'1.0.0',true);
	wp_enqueue_script('sirena-admin-script');
	}else if('sirena_page_Sirena_css'==$hook ){
	    wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/sirena-ace.css', array(), '1.0.0', 'all' );
		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.1', true );
		wp_enqueue_script( 'sirena-custom-css-script', get_template_directory_uri() . '/js/sirena-custom-css.js', array('jquery'), '1.0.0', true );
	
	}
	else {return;}
}
add_action('admin_enqueue_scripts','sirena_load_admin_scripts');
	/*
	  =====================================
	  front end enqueue functions
	  =====================================
	 */
function sirena_load_scripts(){
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-owl-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-owl-min-default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-fontawesome-all', get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-wordpress-default', get_template_directory_uri() . '/css/_wordpress.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'dashicons' );
    
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery.js', false, '1.11.3', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jsfile.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts','sirena_load_scripts');