<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Home Children Image Widget
	Description: Home "We want to be happy" Block Widget 
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_homechildrenimg_widgets' );


// Register widget.
function anariel_homechildrenimg_widgets() {
	register_widget( 'anariel_homechildrenimg_Widget' );
}

// Widget class.
class anariel_homechildrenimg_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_homechildrenimg_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_homechildrenimg_widget', 'description' => __('Image with button Widget - Children and Team Image with title button used on home, about and langin pages', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_homechildrenimg_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_homechildrenimg_widget', __('Anariel-Image with Button', 'anariel'), $widget_ops, $control_ops );
	}


/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$button_url = $instance['button_url'];
		
		$image_url = $instance['image_url'];
		$image_title = $instance['image_title'];
		
		$text_title = $instance['text_title'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
<?php /* Display the widget title if one was input (before and after defined by themes). */
				if ( $title )
					echo $before_title . $title . $after_title;
				?>
                
<img src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>" />
  <section class="noteblock">
    <p class="note"><a href="<?php echo $button_url; ?>" target="_blank"><span class="quotemark">&quot;</span> <?php echo $text_title; ?> <span class="quotemark">&quot;</span></a></p>
  </section>
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
			
			'button_url' => 'http://www.anariel.com/4children/donation/',
		
		    'image_url' => 'http://www.anariel.com/4children/wp-content/uploads/2013/10/children.jpg',
			'image_title' => 'we want to be happy image',
			
			'text_title' => 'We want to be happy!'
		
		
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
  <label for="<?php echo $this->get_field_id( 'button_url' ); ?>">
    <?php _e('Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'button_url' ); ?>" name="<?php echo $this->get_field_name( 'button_url' ); ?>" value="<?php echo $instance['button_url']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">
    <?php _e('Children "We want to be happy" Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" value="<?php echo $instance['image_url']; ?>" />
</p>

<!-- Description: Text Input -->

<p>
  <label for="<?php echo $this->get_field_id( 'image_title' ); ?>">
    <?php _e('Children "We want to be happy" Image Title:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image_title' ); ?>" name="<?php echo $this->get_field_name( 'image_title' ); ?>" value="<?php echo $instance['image_title']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'text_title' ); ?>">
    <?php _e('"We want to be happy" text', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'text_title' ); ?>" name="<?php echo $this->get_field_name( 'text_title' ); ?>"><?php echo $instance['text_title']; ?></textarea>
</p>
<?php
	}
}