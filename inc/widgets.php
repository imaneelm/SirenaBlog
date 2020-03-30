<?php

class Sirena_follow_widget extends WP_Widget{
	
	//setup the widget name, description, etc...
	
	public function __construct(){
		
		$widget_ops = array(
		   'classname' => 'Sirena_follow_widget',
		   'description' => 'Custom Sirena Follow widget',
		);
		parent::__construct('sirena_follow','Social Media',$widget_ops );
		
	}
	//back-end display widget
	public function form( $instance ){
		
		 $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
		  <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
		  </p>
		<?php 
		echo '<p>You can control the fields for this widget from <a href="./admin.php?page=Sirena_Theme"> This page</a> </p>';
	}
	
	//front-end display of widget
	
	public function widget( $args, $instance ){
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$facebook_icon=esc_attr(get_option('facebook'));	
		$twitter_icon=esc_attr(get_option('twitter'));	
		$printerest_icon=esc_attr(get_option('pinterest'));
		$gplus_icon=esc_attr(get_option('gplus'));
		$instagram=esc_attr(get_option('instagram'));
		echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; 
		?>
		<div class="social-media-icons">
		 
		  <?php if (!empty($printerest_icon)):?>
		  <a href="https://www.pinterest.com/<?php echo $printerest_icon;?>" target="_blank"><i class="fab fa-pinterest"></i></a>
		  <?php endif;?>
		  
		 <?php if (!empty($facebook_icon)):?>
		  <a href="https://www.facebook.com/<?php echo $facebook_icon;?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
		  <?php endif;?>	

		  <?php if (!empty($twitter_icon)):?>
		  <a href="https://www.twitter.com/<?php echo $twitter_icon;?>" target="_blank"><i class="fab fa-twitter"></i></a>
		  <?php endif;?>
		  
		  <?php if (!empty($gplus_icon)):?>
          <a href="https://www.plus.google.com/<?php echo $gplus_icon;?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>		 
		  <?php endif;?>		 
		  <?php if (!empty($instagram)):?>
          <a href="https://www.instagram.com/<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram"></i></a>		 
		  <?php endif;?>
		  
        </div>
		<?php
		echo $args['after_widget'];	
	}
	
}
add_action('widgets_init',function(){
	register_widget('Sirena_follow_widget');
});