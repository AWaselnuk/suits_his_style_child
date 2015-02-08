<?php
get_header(); ?>
<div class="container content newspage">
<div class="two_third newsarticles">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', get_post_format() ); ?>
  <?php comments_template( '', true ); ?>
  <?php endwhile; // end of the loop. ?> 
</div>
<!-- end two_third -->
<aside>
<div class="one_third lastcolumn newssidebar">
  <?php get_sidebar(); ?>
</div>
</aside>

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
