<?php settings_errors();?>
<?php
   	// $title=esc_attr(get_option('title_about_blog'));
?>

<form method="POST" action="options.php">
    <?php settings_fields('Sirena-theme-support');?>
	<?php do_settings_sections('sirena_theme_options'); ?>
	<p> Use <strong>this code</strong> to activate the contact form inside a page or a post </p>
	<p><code>[my_contact_form]</code></p>
	<?php submit_button();?>
</form>
