<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="clearfix">
<div class="one_third">
<div class="entry-details">
    <?php if ( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail(); ?>
    <?php endif; ?>
     <p class="meta"><?php the_time('F'); ?> 
      <span class="numb"><?php the_time('j'); ?></span></p>
        <h4 class="info">
    Posted by:<span class="author">
      <?php the_author(); ?>
      </span>
      </h4>
  </div>
  <!-- end entry-details -->
</div>

<div class="two_third lastcolumn">  
  <header class="entry-header clearfix">
    <div class="newstitle">
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'anariel' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h3>
      </div>
  </header>
  <!-- end entry-header -->
  
  <div class="entry-content">
    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
    <?php the_excerpt(); ?>
    <?php else : ?>
    <?php the_content( __( 'Read More', 'anariel' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
    <?php endif; ?>
  </div>
  <!-- end entry-content --> 
  </div>
</div> 
</article>
<!-- end post-<?php the_ID(); ?> -->