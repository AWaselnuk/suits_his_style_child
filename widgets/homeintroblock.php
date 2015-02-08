<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Home Intro Widget
	Description: Home Widget - Intro Block
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_homeintro_widgets' );


// Register widget.
function anariel_homeintro_widgets() {
	register_widget( 'anariel_homeintro_Widget' );
}

// Widget class.
class anariel_homeintro_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_homeintro_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_homeintro_widget', 'description' => __('Intro Widget - place to add your intro content located under the slider on the home page', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_homeintro_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_homeintro_widget', __('Anariel-Intro Block Widget', 'anariel'), $widget_ops, $control_ops );
	}
/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$textone_widget = $instance['textone_widget'];
		
		$donate_linkurl = $instance['donate_linkurl'];
		$donate_linktext = $instance['donate_linktext'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>

<section class="intro">
  <h1><?php echo $title; ?></h1>
  <article class="organization-description">
    <p><?php echo $textone_widget; ?></p><br>
    <a class="donate" href="<?php echo $donate_linkurl; ?>" target="_blank"><?php echo $donate_linktext; ?></a> </article>
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
		
		    'title' => '4 Children with Love',
		
		    'textone_widget' => '<strong>4 Children</strong> is charitable organization dedicated to the children.',
			
			'donate_linkurl' => 'https://secure.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6239401/k.C01C/Global_Action_Fund/apps/ka/sd/donor.asp',
			'donate_linktext' => 'Donate Now'
		
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
  <label for="<?php echo $this->get_field_id( 'textone_widget' ); ?>">
    <?php _e('First Sentence:', 'anariel') ?>
  </label>
  <textarea type="text"  id="<?php echo $this->get_field_id( 'textone_widget' ); ?>" name="<?php echo $this->get_field_name( 'textone_widget' ); ?>"><?php echo $instance['textone_widget']; ?></textarea>
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'donate_linkurl' ); ?>">
    <?php _e('Donate link url:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'donate_linkurl' ); ?>" name="<?php echo $this->get_field_name( 'donate_linkurl' ); ?>" value="<?php echo $instance['donate_linkurl']; ?>" />
</p>
<hr>
<p>
  <label for="<?php echo $this->get_field_id( 'donate_linktext' ); ?>">
    <?php _e('Donate link text:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'donate_linktext' ); ?>" name="<?php echo $this->get_field_name( 'donate_linktext' ); ?>" value="<?php echo $instance['donate_linktext']; ?>" />
</p>
<?php
	}
}