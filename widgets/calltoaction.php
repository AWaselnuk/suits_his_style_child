<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Call to action buttons and socials Widget
	Description: Widget - Call to action buttons and socials widget
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_calltoaction_widgets' );


// Register widget.
function anariel_calltoaction_widgets() {
	register_widget( 'anariel_calltoaction_Widget' );
}

// Widget class.
class anariel_calltoaction_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_calltoaction_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_calltoaction_widget', 'description' => __('Call to action buttons - three buttons on the top right', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_calltoaction_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_calltoaction_widget', __('Anariel-Call to Action Buttons', 'anariel'), $widget_ops, $control_ops );
	}
/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$button_url_first = $instance['button_url_first'];
		
		$firstline_text_first = $instance['firstline_text_first'];
		
		$button_url_second = $instance['button_url_second'];
		
		$firstline_text_second = $instance['firstline_text_second'];
		
		$button_url_third = $instance['button_url_third'];
		
		$firstline_text_third = $instance['firstline_text_third'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
<ul class="buttons">
          <li><a href="<?php echo $button_url_first; ?>" target="_blank">
            <section class="programs">
              <h3><?php echo $firstline_text_first; ?></h3>
              </section>
            </a> </li>
          <li><a href="<?php echo $button_url_second; ?>" target="_blank">
            <section class="water">
              <h3><?php echo $firstline_text_second; ?></h3>
              </section>
            </a> </li>
          <li><a href="<?php echo $button_url_third; ?>" target="_blank">
            <section class="donate">
              <h3><?php echo $firstline_text_third; ?></h3>
             </section>
            </a> </li>
        </ul>
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
		
		    'button_url_first' => 'http://gift.savethechildren.org/site/c.dvKSIbOSIlJcH/b.6885579/k.BFD5/Home.htm',
			'firstline_text_first' => 'Programs',
			
			'button_url_second' => 'http://www.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6146369/k.95B8/Ways_To_Give.htm',
			'firstline_text_second' => 'Get Involved',
			
			'button_url_third' => 'https://secure.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6239401/k.C01C/Global_Action_Fund/apps/ka/sd/donor.asp',
			'firstline_text_third' => 'Donate Now'
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
  <label for="<?php echo $this->get_field_id( 'button_url_first' ); ?>">
    <?php _e('Programs Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'button_url_first' ); ?>" name="<?php echo $this->get_field_name( 'button_url_first' ); ?>" value="<?php echo $instance['button_url_first']; ?>" />
</p>
<!-- Description: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'firstline_text_first' ); ?>">
    <?php _e('Programs Button First Line Text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'firstline_text_first' ); ?>" name="<?php echo $this->get_field_name( 'firstline_text_first' ); ?>" value="<?php echo $instance['firstline_text_first']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'button_url_second' ); ?>">
    <?php _e('Get Involved Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'button_url_second' ); ?>" name="<?php echo $this->get_field_name( 'button_url_second' ); ?>" value="<?php echo $instance['button_url_second']; ?>" />
</p>
<!-- Description: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'firstline_text_second' ); ?>">
    <?php _e('Get Involved Button First Line Text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'firstline_text_second' ); ?>" name="<?php echo $this->get_field_name( 'firstline_text_second' ); ?>" value="<?php echo $instance['firstline_text_second']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'button_url_third' ); ?>">
    <?php _e('Donate Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'button_url_third' ); ?>" name="<?php echo $this->get_field_name( 'button_url_third' ); ?>" value="<?php echo $instance['button_url_third']; ?>" />
</p>
<!-- Description: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'firstline_text_third' ); ?>">
    <?php _e('Donate Button First Line Text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'firstline_text_third' ); ?>" name="<?php echo $this->get_field_name( 'firstline_text_third' ); ?>" value="<?php echo $instance['firstline_text_third']; ?>" />
</p>
<?php
	}
}