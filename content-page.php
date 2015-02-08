<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="single-entry-content">
    <?php the_content( __( 'Continue Reading', 'anariel' ) ); ?>
    <div class="clear"></div>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
  </div>
  <!--end entry-content--> 
  
</article>
<!-- end post-<?php the_ID(); ?> --> 
