<?php
get_header(); ?>
<div class="container content newspage">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content','ourevents', get_post_format() ); ?>
  <?php the_meta(); ?>
  <?php comments_template( '', true ); ?>
  <?php endwhile; // end of the loop. ?> 
 <nav id="nav-below">
    <div class="nav-previous">
      <?php previous_post_link( '%link', __( '&lt  Previous Post', 'Previous post link', 'anariel' ) . '' ); ?>
    </div>
    <div class="nav-next">
      <?php next_post_link( '%link', __( 'Next Post &gt;', 'Next post link', 'anariel' ) . '' ); ?>
    </div>
  </nav>
  <!-- end nav-below --> 
</div>
<!-- end container -->
<?php get_footer(); ?>
