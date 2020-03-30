<?php

//Contact form shortcode
function sirena_contact_form($atts, $content = null) {
	
		//[my_contact_form]
		
		//get the attributes
		$atts = shortcode_atts(
		   array(),
		   $atts,
		   'my_contact_form'
		);
		
		//return HTML
		ob_start();
		include 'template/contact-form.php';
		
		return ob_get_clean();
}

add_shortcode('my_contact_form','sirena_contact_form');
?>

