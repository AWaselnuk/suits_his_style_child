<div class="shadow2">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-link">
    <?php the_content( __( 'Read More', 'anariel' ) ); ?>
    <footer class="entry-meta">
      <p><span class="date">
        <?php echo get_the_date(); ?>
        </span></p>
    </footer>
    <!-- end entry-meta --> 
  </div>
  <!-- end entry-link --> 
  
</article>
<!-- end post-<?php the_ID(); ?> -->
</div>