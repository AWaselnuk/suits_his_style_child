<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Home Sponsors Text Widget
	Description: Home Widget - Home Sponsors Text
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_homesponsorstext_widgets' );


// Register widget.
function anariel_homesponsorstext_widgets() {
	register_widget( 'anariel_homesponsorstext_Widget' );
}

// Widget class.
class anariel_homesponsorstext_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_homesponsorstext_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_homesponsorstext_widget', 'description' => __('Sponsors Text Block - place to add sposors text (we used this widget on home and about pages)', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_homesponsorstext_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_homesponsorstext_widget', __('Anariel-Sponsors Text Widget', 'anariel'), $widget_ops, $control_ops );
	}
/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$text_widget = $instance['text_widget'];
		
		$more_linkurl = $instance['more_linkurl'];
		$more_linktext = $instance['more_linktext'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
        
 <p class="details"><span class="quotemark">&quot;</span><?php echo $text_widget; ?><span class="quotemark">&quot;</span></p>
 <a class="button" href="<?php echo $more_linkurl; ?>"><?php echo $more_linktext; ?></a> 
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
		
		    'text_widget' => 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.',
			
			'more_linkurl' => 'http://www.anariel.com/intune/bio/',
			'more_linktext' => 'Do you want to help us?'
		
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
  <label for="<?php echo $this->get_field_id( 'text_widget' ); ?>">
    <?php _e('Sponsors Text:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'text_widget' ); ?>" name="<?php echo $this->get_field_name( 'text_widget' ); ?>"><?php echo $instance['text_widget']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'more_linkurl' ); ?>">
    <?php _e('Button link url:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'more_linkurl' ); ?>" name="<?php echo $this->get_field_name( 'more_linkurl' ); ?>" value="<?php echo $instance['more_linkurl']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'more_linktext' ); ?>">
    <?php _e('Button link text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'more_linktext' ); ?>" name="<?php echo $this->get_field_name( 'more_linktext' ); ?>" value="<?php echo $instance['more_linktext']; ?>" />
</p>
<?php
	}
}