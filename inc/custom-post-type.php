<?php
$contact = get_option( 'activate_contact' );
if (@$contact == 1 ){
      add_action('init','sunset_contact_custom_post_type');
	  add_filter('manage_sirena-contact_posts_columns','sirena_set_contact_columns');
	  add_action( 'manage_sirena-contact_posts_custom_column', 'sirena_contact_custom_column',10,2 );
	  add_action('add_meta_boxes','sirena_contact_add_meta_box');
	  add_action( 'save_post', 'sirena_save_contact_email_data' );
}
/* CONTACT custom post type*/
function sunset_contact_custom_post_type(){
	$labels=array(
	  'name'		 =>'Messages',
      'singular_name'=>'Message',	
      'menu_name'    =>'Messages',
      'name_admin_bar'=>'Message'
      	  
	);
	$args=array(
	  'labels'   =>$labels,
	  'show_ui'  =>true,
	  'show_in_menu'=>true,
	  'capability_type'=>'post',
	  'hierarchical'=>false,
	   'menu_position'=>26,
	   'menu_icon'=>'dashicons-email-alt',
	   'supports'=> array('title','editor','author')
	);
	register_post_type('sirena-contact',$args);
	
}
function sirena_set_contact_columns($columns){
	$new_columns=array();
	$new_columns['title']='Name';
	$new_columns['message']='Message';
	$new_columns['email']='Email';
	$new_columns['date']='Date';
     return $new_columns;	
	
}
function sirena_contact_custom_column( $column, $post_id ){
	

			switch( $column ){
		
		case 'message' :
			echo get_the_excerpt();
			break;
			
		case 'email' :
			//email column
			$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
	
}
/*contact meta boxes*/
function sirena_contact_add_meta_box(){
	add_meta_box('contact_email','User Email', 'sirena_contact_email_callback','sirena-contact','side','high');
}
function sirena_contact_email_callback($post){
	wp_nonce_field('sirena_save_contact_email_data','sirena_contact_email_meta_box_nonce');
	
	$value = get_post_meta($post->ID,'_contact_email_value_key',true);
	
	echo'<label for="sirena_contact_email_field">User Email Adress: </label>';
	echo'<input type="email" id="sirena_contact_email_field" name="sirena_contact_email_field" value="'.esc_attr($value).'" size="25" />';
	
}
 function sirena_save_contact_email_data($post_id){
	 if( ! isset($_POST['sirena_contact_email_meta_box_nonce'])){
		 return;
	 }
     if( ! wp_verify_nonce( $_POST['sirena_contact_email_meta_box_nonce'], 'sirena_save_contact_email_data') ) {
		 return;
	 }
	 if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		 return;
	 }
	 if(!current_user_can('edit_post',$post_id)){
		 return;
	 }
	 if(!isset($_POST['sirena_contact_email_field'])){
		 return;
	 }
	 $my_data = sanitize_text_field($_POST['sirena_contact_email_field']);
	
	
    update_post_meta( $post_id, '_contact_email_value_key', $my_data );
}








	
