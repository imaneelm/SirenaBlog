<?php settings_errors();?>
<?php
   
	$facebook_icon=esc_attr(get_option('facebook'));	
	$twitter_icon=esc_attr(get_option('twitter'));	
	$printerest_icon=esc_attr(get_option('printerest'));
	$gplus_icon=esc_attr(get_option('gplus'));
	$instgrm=esc_attr(get_option('instagram'));
	

?>
<form method="POST" action="options.php" >

    <?php settings_fields('Sirena-settings-group');?>
	<?php do_settings_sections('Sirena_Theme'); ?>
	<?php submit_button();?>

</form>

