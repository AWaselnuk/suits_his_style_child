<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Footer Contact Info Widget
	Description: Footer Widget - Contact Info
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_footercontactinfo_widgets' );


// Register widget.
function anariel_footercontactinfo_widgets() {
	register_widget( 'anariel_footercontactinfo_Widget' );
}

// Widget class.
class anariel_footercontactinfo_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_footercontactinfo_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_footercontactinfo_widget', 'description' => __('Footer Widget - Contact Info - add your contact info', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_footercontactinfo_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_footercontactinfo_widget', __('Anariel-Footer Contact Info Widget', 'anariel'), $widget_ops, $control_ops );
	}
/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$address_title = $instance['address_title'];
		$address_text = $instance['address_text'];
		
		$phone_title = $instance['phone_title'];
		$phone_text = $instance['phone_text'];
		
		$email_title = $instance['email_title'];
		$email_text = $instance['email_text'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
 <h3><?php echo $title; ?></h3>
        <p><span class="orange"><strong><?php echo $address_title; ?></strong></span> <br>
          <?php echo $address_text; ?></p>
        <p><span class="orange"><strong><?php echo $phone_title; ?></strong></span> <br>
          <?php echo $phone_text; ?><br>
        </p>
        <p><span class="orange"><strong><?php echo $email_title; ?></strong></span> <br>
          <?php echo $email_text; ?><br>
        </p>
<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

/*-----------------------------------------------------------------------------------*/
/*	Widget Settings
/*-----------------------------------------------------------------------------------*/
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
		
		    'title' => 'Contact Information',
		
		    'address_title' => 'Address:',
			'address_text' => 'No.2 - 123678 street name City, Country',
			
			'phone_title' => 'Phone:',
			'phone_text' => '+ 9 (094) 067 93567',
			
			'email_title' => 'Email:',
			'email_text' => 'info@4childrenwithlove.com',
		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>">
    <?php _e('Title:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'address_title' ); ?>">
    <?php _e('Address Title:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'address_title' ); ?>" name="<?php echo $this->get_field_name( 'address_title' ); ?>"><?php echo $instance['address_title']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'address_text' ); ?>">
    <?php _e('Address Text:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'address_text' ); ?>" name="<?php echo $this->get_field_name( 'address_text' ); ?>"><?php echo $instance['address_text']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'phone_title' ); ?>">
    <?php _e('Phone Title:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'phone_title' ); ?>" name="<?php echo $this->get_field_name( 'phone_title' ); ?>"><?php echo $instance['phone_title']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'phone_text' ); ?>">
    <?php _e('Phone Number:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'phone_text' ); ?>" name="<?php echo $this->get_field_name( 'phone_text' ); ?>"><?php echo $instance['phone_text']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'email_title' ); ?>">
    <?php _e('Email Title:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'email_title' ); ?>" name="<?php echo $this->get_field_name( 'email_title' ); ?>"><?php echo $instance['email_title']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'email_text' ); ?>">
    <?php _e('Email Address:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'email_text' ); ?>" name="<?php echo $this->get_field_name( 'email_text' ); ?>"><?php echo $instance['email_text']; ?></textarea>
</p>
<?php
	}
}