<?php

/*-----------------------------------------------------------------------------------

	Name: Anariel Socials Widget
	Description:  Widget for Social Icons
	
-----------------------------------------------------------------------------------*/


// Add function to widgets_init that'll load our widget.
add_action( 'widgets_init', 'anariel_socials_widgets' );


// Register widget.
function anariel_socials_widgets() {
	register_widget( 'anariel_socials_Widget' );
}

// Widget class.
class anariel_socials_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/
	
	function anariel_socials_Widget() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'anariel_socials_widget', 'description' => __('Social Icons Widget - 5 social icons', 'anariel') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'anariel_socials_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'anariel_socials_widget', __('Anariel-Social Icons Widget', 'anariel'), $widget_ops, $control_ops );
	}


/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/
	
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters('widget_title', $instance['title'] );

		/* Our variables from the widget settings. */
		$instance['title'] = $instance['title']; 
		
		$link1_url = $instance['link1_url'];
		$image1_url = $instance['image1_url'];
		$image1_title = $instance['image1_title'];
		
		$link2_url = $instance['link2_url'];
		$image2_url = $instance['image2_url'];
		$image2_title = $instance['image2_title'];
		
		$link3_url = $instance['link3_url'];
		$image3_url = $instance['image3_url'];
		$image3_title = $instance['image3_title'];
		
		$link4_url = $instance['link4_url'];
		$image4_url = $instance['image4_url'];
		$image4_title = $instance['image4_title'];
		
		$link5_url = $instance['link5_url'];
		$image5_url = $instance['image5_url'];
		$image5_title = $instance['image5_title'];
		
	


		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display Widget */
		?>
<?php /* Display the widget title if one was input (before and after defined by themes). */
				if ( $title )
					echo $before_title . $title . $after_title;
				?>
                
 <ul class="socials fr">
  <li><a href="<?php echo $link1_url; ?>" target="_blank"><img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_title; ?>" /></a></li>
  <li><a href="<?php echo $link2_url; ?>" target="_blank"><img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_title; ?>" /></a></li>
  <li><a href="<?php echo $link3_url; ?>" target="_blank"><img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_title; ?>" /></a></li>
  <li><a href="<?php echo $link4_url; ?>" target="_blank"><img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_title; ?>" /></a></li>
  <li><a href="<?php echo $link5_url; ?>" target="_blank"><img src="<?php echo $image5_url; ?>" alt="<?php echo $image5_title; ?>" /></a></li>
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
			
			'link2_url' => 'https://twitter.com/Anariel77',
		    'image2_url' => 'http://www.anariel.com/wp4children/wp-content/uploads/2013/11/twitter.png',
			'image2_title' => 'twitter image',
			
			 'link1_url' => 'https://www.facebook.com/Anariel.Design',
		    'image1_url' => 'http://www.anariel.com/wp4children/wp-content/uploads/2013/11/facebook.png',
			'image1_title' => 'facebook image',
			
			'link4_url' => 'http://vimeo.com/user20133412/videos',
		    'image4_url' => 'http://www.anariel.com/wp4children/wp-content/uploads/2013/11/vimeo.png',
			'image4_title' => 'vimeo image',
			
			'link3_url' => 'https://plus.google.com/u/0/b/111668042102800918091/+Anarieldesign/posts',
		    'image3_url' => 'http://www.anariel.com/wp4children/wp-content/uploads/2013/11/google.png',
			'image3_title' => 'google image',
			
			'link5_url' => 'http://www.linkedin.com/profile/view?id=196566715&trk=nav_responsive_tab_profile_pic',
		    'image5_url' => 'http://www.anariel.com/wp4children/wp-content/uploads/2013/11/linkedin.png',
			'image5_title' => 'linkedin image'	
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
  <label for="<?php echo $this->get_field_id( 'link2_url' ); ?>">
    <?php _e('Twitter link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link2_url' ); ?>" name="<?php echo $this->get_field_name( 'link2_url' ); ?>" value="<?php echo $instance['link2_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image2_url' ); ?>">
    <?php _e('Twitter Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image2_url' ); ?>" name="<?php echo $this->get_field_name( 'image2_url' ); ?>" value="<?php echo $instance['image2_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image2_title' ); ?>">
    <?php _e('Twitter Image ALT:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image2_title' ); ?>" name="<?php echo $this->get_field_name( 'image2_title' ); ?>" value="<?php echo $instance['image2_title']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link1_url' ); ?>">
    <?php _e('Facebook link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link1_url' ); ?>" name="<?php echo $this->get_field_name( 'link1_url' ); ?>" value="<?php echo $instance['link1_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image1_url' ); ?>">
    <?php _e('Facebook Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image1_url' ); ?>" name="<?php echo $this->get_field_name( 'image1_url' ); ?>" value="<?php echo $instance['image1_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image1_title' ); ?>">
    <?php _e('Facebook Image ALT:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image1_title' ); ?>" name="<?php echo $this->get_field_name( 'image1_title' ); ?>" value="<?php echo $instance['image1_title']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link4_url' ); ?>">
    <?php _e('Vimeo link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link4_url' ); ?>" name="<?php echo $this->get_field_name( 'link4_url' ); ?>" value="<?php echo $instance['link4_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image4_url' ); ?>">
    <?php _e('Vimeo Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image4_url' ); ?>" name="<?php echo $this->get_field_name( 'image4_url' ); ?>" value="<?php echo $instance['image4_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image4_title' ); ?>">
    <?php _e('Vimeo Image ALT:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image4_title' ); ?>" name="<?php echo $this->get_field_name( 'image4_title' ); ?>" value="<?php echo $instance['image4_title']; ?>" />
</p>
<hr>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link3_url' ); ?>">
    <?php _e('Google link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link3_url' ); ?>" name="<?php echo $this->get_field_name( 'link3_url' ); ?>" value="<?php echo $instance['link3_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image3_url' ); ?>">
    <?php _e('Google Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image3_url' ); ?>" name="<?php echo $this->get_field_name( 'image3_url' ); ?>" value="<?php echo $instance['image3_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image3_title' ); ?>">
    <?php _e('Google Image ALT:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image3_title' ); ?>" name="<?php echo $this->get_field_name( 'image3_title' ); ?>" value="<?php echo $instance['image3_title']; ?>" />
</p>
<!-- Widget Title: Text Input -->
<p>
  <label for="<?php echo $this->get_field_id( 'link5_url' ); ?>">
    <?php _e('Linkedin link URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'link5_url' ); ?>" name="<?php echo $this->get_field_name( 'link5_url' ); ?>" value="<?php echo $instance['link5_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image5_url' ); ?>">
    <?php _e('Linkedin Image URL:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image5_url' ); ?>" name="<?php echo $this->get_field_name( 'image5_url' ); ?>" value="<?php echo $instance['image5_url']; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'image5_title' ); ?>">
    <?php _e('Linkedin Image ALT:', 'anariel') ?>
  </label>
  <input type="text" id="<?php echo $this->get_field_id( 'image5_title' ); ?>" name="<?php echo $this->get_field_name( 'image5_title' ); ?>" value="<?php echo $instance['image5_title']; ?>" />
</p>
<hr>
<?php
	}
}