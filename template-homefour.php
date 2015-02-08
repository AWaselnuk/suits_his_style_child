<?php
/**
 * Template Name: Home Four
 *
 */

get_header(); ?>

<!--Our Program ==================================================
================================================== -->
<div class="programblock">
  <div class="container program">
    <?php
$args = array( 
				'post_type' => 'childrenprograms', 
				'posts_per_page' => '3', 		
			);
$wpchildrenprograms = new WP_Query( $args );

if ($wpchildrenprograms->have_posts()) : while ( $wpchildrenprograms->have_posts() ) : $wpchildrenprograms->the_post();
?>
    <div class="grid_3 grid_item clearfix version">
      <div class="clearfix">
        <h3><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h3>
          <div class="circleimage">
            <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
          </div>
      </div>
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
  </div>
  <!-- end container --> 
</div>
<!-- end programblock --> 
<div class="newsblock">
<div class="container content page">
<div class="two_third">
  <?php the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
</div>
<br>
 <aside>
    <div class="one_third lastcolumn sidebar">
      <div class="sidebarinner">
        <?php get_sidebar( 'homethree' ); ?>
      </div>
    </div>
  </aside>
</div>
<!-- end container -->
</div>
<?php get_footer(); ?>
