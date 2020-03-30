<?php
/*
   ======================
      ADMIN PAGE
   ======================
*/

function Sirena_add_admin_page(){
	//generate sirena admin page
	add_menu_page('Sirena theme options','Sirena','manage_options','Sirena_Theme','sirena_footer_page',110);
	
	//generate sirena subadmin page
	add_submenu_page('Sirena_Theme','Sirena theme options','Social media','manage_options','Sirena_Theme','sirena_footer_page');
	add_submenu_page('Sirena_Theme','Sirena options','theme options','manage_options','sirena_theme_options','sirena_theme_support_page');
	
	//Activate custom settings
	add_action('admin_init','Sirena_custom_settings');
	
}
add_action('admin_menu','Sirena_add_admin_page');
function Sirena_custom_settings(){
	//footter options
	register_setting('Sirena-settings-group','facebook');
	register_setting('Sirena-settings-group','twitter','sunset_sanitize_twitter_handler');
	register_setting('Sirena-settings-group','pinterest');
	register_setting('Sirena-settings-group','gplus');
	register_setting('Sirena-settings-group','instagram');
	add_settings_section('Sirena-footer-options','Social media','Sirena_footer_options','Sirena_Theme');
	add_settings_field('footer-facebook','Facebook handler','Sirena_footer_facebook','Sirena_Theme','Sirena-footer-options');
	add_settings_field('footer-twitter','twitter handler','Sirena_footer_twitter','Sirena_Theme','Sirena-footer-options');
	add_settings_field('footer-pinterest','pinterest handler','Sirena_footer_pinterest','Sirena_Theme','Sirena-footer-options');
	add_settings_field('footer-gplus','google plus handler','Sirena_footer_gplus','Sirena_Theme','Sirena-footer-options');
	add_settings_field('footer-instagram','instagram handler','Sirena_footer_instagram','Sirena_Theme','Sirena-footer-options');
	    
	
	//theme support
 
    register_setting('Sirena-theme-support','post_formats'); 
    register_setting('Sirena-theme-support','activate_contact'); 
	add_settings_section('sirena-theme-options','Theme options','sirena_options_contact','sirena_theme_options');
	add_settings_field('post-formats','Post Formats','Sirena_post_formats','sirena_theme_options','sirena-theme-options');
	add_settings_field('activate-form','Activate contact form','sirena_activate_contact','sirena_theme_options','sirena-theme-options');
	
	

}

/*=========footer options===========*/

function sirena_footer_page(){
	//generation of my footer options page
      require_once(get_template_directory(). '/inc/template/Sirena-footer.php');
      	
}
function Sirena_footer_options(){
      echo 'customise your social media widget ';
	
}

function Sirena_footer_facebook(){
	$fb=esc_attr(get_option('facebook'));
	echo '<input type="text" name="facebook" value="'.$fb.'" placeholder="set your facebook "  />';
}
function Sirena_footer_twitter(){
	$tw=esc_attr(get_option('twitter'));
	echo '<input type="text" name="twitter" value="'.$tw.'" placeholder="set your twitter "  /><p><i>input your twitter username without the @</i></p>';
}

function Sirena_footer_pinterest(){
	$ptrst=esc_attr(get_option('pinterest'));
	echo '<input type="text" name="pinterest" value="'.$ptrst.'" placeholder="set your pinterest "  />';
}
function Sirena_footer_gplus(){
	$gplus=esc_attr(get_option('gplus'));
	echo '<input type="text" name="gplus" value="'.$gplus.'" placeholder="set your google+ "  />';
}
function Sirena_footer_instagram(){
	$instgrm=esc_attr(get_option('instagram'));
	echo '<input type="text" name="instagram" value="'.$instgrm.'" placeholder="set your instagram "  />';
}


//sanitization settings
function sunset_sanitize_twitter_handler($input){
	$output=sanitize_text_field($input);
	$output=str_replace('@','',$output);
	return $output;
}

/*========theme support =========*/

function sirena_theme_support_page(){
	//generation of my theme support options page
      require_once(get_template_directory(). '/inc/template/Sirena-theme-support.php');
}


//post formats callback function
function sirena_options_contact(){
	echo 'activate and desactivate specific theme support options'; 
}

function Sirena_post_formats() {
	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}

function sirena_activate_contact() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.' />';
}
