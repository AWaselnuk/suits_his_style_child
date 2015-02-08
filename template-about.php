<?php
/**
 * Template Name:  About Page
 *
 */

get_header(); ?>

<div class="container content page">
  <?php the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
</div>
<!-- end container -->


<!--FAQ, Team ==================================================
================================================== -->
<div class="newsblock">
<div class="container faq">
<div class="one_half">
    <?php
$args = array( 
				'post_type' => 'faq',
				'posts_per_page' => '100'
			);
$wpfaq = new WP_Query( $args );

if ($wpfaq->have_posts()) : while ( $wpfaq->have_posts() ) : $wpfaq->the_post();
?>
    <div class="accordion-trigger">
      <h3>
        <?php the_title(); ?>
      </h3>
    </div>
    <div class="accordion-container">
      <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
      <?php the_content();?>
      <div class="clear"></div>
    </div>
    <?php
endwhile;
else :
?>
    <?php
 
endif; // END the Wordpress Loop
wp_reset_query(); // Reset the Query Loop
?>
</div>
<div class="one_half lastcolumn team">
      <?php
$args = array( 
				'post_type' => 'ourteam', 
				'posts_per_page' => '50', 		
			);
$wpourteam = new WP_Query( $args );

if ($wpourteam->have_posts()) : while ( $wpourteam->have_posts() ) : $wpourteam->the_post();
?>
      <div class="grid_2 grid_item clearfix version">
        <h3><?php the_title(); ?></h3>
           <?php the_post_thumbnail(); ?>
        <?php
global $more;
$more = 0;
?>
        <?php the_content(__('Read more', 'anariel')); ?>
      </div>
      <!-- column ends here -->
      <?php
endwhile;
else :
?>
      <?php
 
endif; // END the Wordpress Loop
wp_reset_query(); // Reset the Query Loop
?>
      <br>
    </div>
    <!-- container ends here --> 
</div>
<!-- end container -->
</div>
<?php get_footer(); ?>
