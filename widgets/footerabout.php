<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Footer About Widget
	Description: Footer Widget - About Organization
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_footerabout_widgets' );


// Register widget.
function anariel_footerabout_widgets() {
	register_widget( 'anariel_footerabout_Widget' );
}

// Widget class.
class anariel_footerabout_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_footerabout_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_footerabout_widget', 'description' => __('Footer Widget - Organization Info - organization info with logo and donate button', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_footerabout_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_footerabout_widget', __('Anariel-Footer Organization Info Widget', 'anariel'), $widget_ops, $control_ops );
	}
/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$image_url = $instance['image_url'];
		$image_title = $instance['image_title'];
		
		$text_widget = $instance['text_widget'];
		$textone_widget = $instance['textone_widget'];
		
		$more_linkurl = $instance['more_linkurl'];
		$more_linktext = $instance['more_linktext'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>

<img src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>" />
<p><?php echo $text_widget; ?></p>
<p class="details"><?php echo $textone_widget; ?></p>
<a class="donate" href="<?php echo $more_linkurl; ?>"><?php echo $more_linktext; ?></a>
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
		
		    'title' => '',
		
		    'image_url' => 'http://www.anariel.com/4children/wp-content/uploads/2013/10/footerlogo.png',
			'image_title' => 'organization image',
		
		    'text_widget' => '4 Children is charitable organization dedicated to the children.',
			'textone_widget' => 'Children desirve the right to an appropriate standard of living, health care and education. Children need to be protected from abuse, labour work and discrimination.',
			
			'more_linkurl' => 'https://secure.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6239401/k.C01C/Global_Action_Fund/apps/ka/sd/donor.asp',
			'more_linktext' => 'Donate'
		
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
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">
    <?php _e('Organization Logo Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" value="<?php echo $instance['image_url']; ?>" />
</p>

<!-- Description: Text Input -->

<p>
  <label for="<?php echo $this->get_field_id( 'image_title' ); ?>">
    <?php _e('Organization Logo Image ALT text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image_title' ); ?>" name="<?php echo $this->get_field_name( 'image_title' ); ?>" value="<?php echo $instance['image_title']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'text_widget' ); ?>">
    <?php _e('Text Part First:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'text_widget' ); ?>" name="<?php echo $this->get_field_name( 'text_widget' ); ?>"><?php echo $instance['text_widget']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'textone_widget' ); ?>">
    <?php _e('Text Part Second:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'textone_widget' ); ?>" name="<?php echo $this->get_field_name( 'textone_widget' ); ?>"><?php echo $instance['textone_widget']; ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'more_linkurl' ); ?>">
    <?php _e('Donate link url:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'more_linkurl' ); ?>" name="<?php echo $this->get_field_name( 'more_linkurl' ); ?>" value="<?php echo $instance['more_linkurl']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'more_linktext' ); ?>">
    <?php _e('Donate link text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'more_linktext' ); ?>" name="<?php echo $this->get_field_name( 'more_linktext' ); ?>" value="<?php echo $instance['more_linktext']; ?>" />
</p>
<hr>
<?php
	}
}