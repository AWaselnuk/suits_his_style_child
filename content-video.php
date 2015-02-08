<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-post-format">
    <header class="entry-header clearfix">
      <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'anariel' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_title(); ?>
        </a></h3>
    </header>
    <!-- end entry-header -->
    
    <?php the_content( __( 'Read More', 'anariel' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
  </div>
  <!-- end entry-post-format --> 
  
</article>
<!-- end post-<?php the_ID(); ?> -->