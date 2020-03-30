<?php
/*
   ======================
      theme Support PAGE
   ======================
*/
$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = array();
	foreach ( $formats as $format ){
		$output[] = ( @$options[$format] == 1 ? $format : '' );
	}
if(!empty($options)){
	add_theme_support( 'post-formats',$output );
	
}
	/*
	  =====================================
	   custom menus
	  =====================================
	 */
	  
	function sirena_theme(){
	   add_theme_support('menus');
	   register_nav_menu('primary','primary header navigation');
	}
	add_action('after_setup_theme','sirena_theme');
  /*
     ===================================
             add theme support
	 ===================================
	*/
   
   if(function_exists('add_theme_support'))
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'custom-background' );
   add_theme_support( 'custom-header' );
   add_theme_support( 'html5',array('searchform') );
   add_theme_support( 'custom-logo' );
   
/*
	========================
		BLOG LOOP CUSTOM FUNCTIONS
	========================
*/
function sirena_get_attachment( $num = 1 ){
	
	$output = '';
	if( has_post_thumbnail() && $num == 1 ): 
		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	else:
		$attachments = get_posts( array( 
			'post_type' => 'attachment',
			'posts_per_page' => $num,
			'post_parent' => get_the_ID()
		) );
		if( $attachments && $num == 1 ):
			foreach ( $attachments as $attachment ):
				$output = wp_get_attachment_url( $attachment->ID );
			endforeach;
		elseif( $attachments && $num > 1 ):
			$output = $attachments;
		endif;
		
		wp_reset_postdata();
		
	endif;
	
	return $output;
}
   
 function sirena_get_enbedded_media($type = array() ){
	 
	$content= do_shortcode(apply_filters('the_content',get_the_content()));
	$enbed=get_media_embedded_in_content($content, $type);
	
	if(in_array('audio', $type)):
	    $output = str_replace( '?visual=true','?visual=false',$enbed[0]);
	else:
		$output=$enbed[0];
    endif;
	
	
	return $output;
	 
 }
 function sirena_grab_url() {
	if( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links ) ){
		return false;
	}
	return esc_url_raw( $links[1] );
}

function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '6b2326a6f6b3fc';
  $phpmailer->Password = '0d902d113e1961';
}

add_action('phpmailer_init', 'mailtrap');

