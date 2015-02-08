<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel About Left Column Widget
	Description: About Widget - Left Column Widget
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_aboutleftcolumn_widgets' );


// Register widget.
function anariel_aboutleftcolumn_widgets() {
	register_widget( 'anariel_aboutleftcolumn_Widget' );
}

// Widget class.
class anariel_aboutleftcolumn_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_aboutleftcolumn_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_aboutleftcolumn_widget', 'description' => __('Left Column Widget - Left Column Text - add top left column text', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_aboutleftcolumn_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_aboutleftcolumn_widget', __('Anariel Left Column Text Widget', 'anariel'), $widget_ops, $control_ops );
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
		$textone_widget = $instance['textone_widget'];
		$texttwo_widget = $instance['texttwo_widget'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
        
        <article class="organization-description">
          <p class="bigger"><?php echo $text_widget; ?></p>
          <div class="blockquote_wrapper">
            <p><?php echo $textone_widget; ?></p>
            <p class="details"><?php echo $texttwo_widget; ?></p>
          </div>
        </article>
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
		
		    'text_widget' => '<strong>4 Children</strong> is charitable organization dedicated to the children.',
			'textone_widget' => 'Organization is estamblish in early 1985. Proactively envisioned multimedia based expertise and cross-media growth strategies.',
			'texttwo_widget' => 'Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.'
		
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
    <?php _e('First Sentence:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'text_widget' ); ?>" name="<?php echo $this->get_field_name( 'text_widget' ); ?>"><?php echo $instance['text_widget']; ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'textone_widget' ); ?>">
    <?php _e('Second Sentence:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'textone_widget' ); ?>" name="<?php echo $this->get_field_name( 'textone_widget' ); ?>"><?php echo $instance['textone_widget']; ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'texttwo_widget' ); ?>">
    <?php _e('Third Sentence:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'texttwo_widget' ); ?>" name="<?php echo $this->get_field_name( 'texttwo_widget' ); ?>"><?php echo $instance['texttwo_widget']; ?></textarea>
</p>

<?php
	}
}