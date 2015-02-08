<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Home Quote Widget
	Description: Home Widget - Home Quote
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_homequote_widgets' );


// Register widget.
function anariel_homequote_widgets() {
	register_widget( 'anariel_homequote_Widget' );
}

// Widget class.
class anariel_homequote_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_homequote_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_homequote_widget', 'description' => __('Quote Widget - We used this quote on the home page under the latest news block', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_homequote_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_homequote_widget', __('Anariel-Quote Widget', 'anariel'), $widget_ops, $control_ops );
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

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
<p class="details"><span class="quotemark">&quot;</span><?php echo $text_widget; ?><span class="quotemark">&quot;</span></p>
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
		
		    'text_widget' => 'Children deserve the right to an appropriate standard of living, health care and education. Children need to be protected from all kinds of abuse and labour work. Children need to be protected from all kinds of abuse, labour work and discrimination. Children who experience domestic violence usualy think that they are guilty, they live in a constant fear and there are more likely to be victims of child abuse.'
		
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
    <?php _e('Quote Text:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'text_widget' ); ?>" name="<?php echo $this->get_field_name( 'text_widget' ); ?>"><?php echo $instance['text_widget']; ?></textarea>
</p>
<?php
	}
}