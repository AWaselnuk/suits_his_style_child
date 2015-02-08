<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel About Right Column Widget
	Description: About Widget - Right Column Widget
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_aboutrightcolumn_widgets' );


// Register widget.
function anariel_aboutrightcolumn_widgets() {
	register_widget( 'anariel_aboutrightcolumn_Widget' );
}

// Widget class.
class anariel_aboutrightcolumn_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_aboutrightcolumn_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_aboutrightcolumn_widget', 'description' => __('Right column Widget - Right Column Text', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_aboutrightcolumn_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_aboutrightcolumn_widget', __('Anariel Right Column Text Widget', 'anariel'), $widget_ops, $control_ops );
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
		
		$link_url = $instance['link_url'];
		$link_text = $instance['link_text'];
		
		$linkone_url = $instance['linkone_url'];
		$linkone_text = $instance['linkone_text'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
   <p><?php echo $text_widget; ?></p>
   <p class="details1"><?php echo $textone_widget; ?></p>
   <p><?php echo $texttwo_widget; ?></p>
   <br>
   <a class="buttonhome1" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a> or <a class="buttonhome" href="<?php echo $linkone_url; ?>"><?php echo $linkone_text; ?></a>
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
		
		    'text_widget' => 'Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.',
			'textone_widget' => 'Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely pursue scalable customer service through sustainable potentialities.',
			'texttwo_widget' => 'Collaboratively administrate turnkey channels whereas <strong>virtual</strong> e-tailers. Objectively seize scalable metrics whereas proactive <strong>e-services</strong>. Seamlessly empower fully researched growth strategies and interoperable internal or "organic" sources. Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. <strong>Energistically</strong> scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks. ',
			
			'link_url' => 'http://gift.savethechildren.org/site/c.dvKSIbOSIlJcH/b.6885579/k.BFD5/Home.htm',
			'link_text' => 'Involve yourself',
			
			'linkone_url' => 'http://gift.savethechildren.org/site/c.dvKSIbOSIlJcH/b.6885579/k.BFD5/Home.htm',
			'linkone_text' => 'Help us as a sponsor'
		
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
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link_url' ); ?>">
    <?php _e('Involve Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" value="<?php echo $instance['link_url']; ?>" />
</p>
<!-- Description: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link_text' ); ?>">
    <?php _e('Involve Button First Line Text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link_text' ); ?>" name="<?php echo $this->get_field_name( 'link_text' ); ?>" value="<?php echo $instance['link_text']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'linkone_url' ); ?>">
    <?php _e('Help us Button Link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'linkone_url' ); ?>" name="<?php echo $this->get_field_name( 'linkone_url' ); ?>" value="<?php echo $instance['linkone_url']; ?>" />
</p>
<!-- Description: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'linkone_text' ); ?>">
    <?php _e('Help us Button First Line Text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'linkone_text' ); ?>" name="<?php echo $this->get_field_name( 'linkone_text' ); ?>" value="<?php echo $instance['linkone_text']; ?>" />
</p>

<?php
	}
}