<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="clearfix">
    <h3 class="entry-title"><?php the_title(); ?></h3>
      <?php the_content( __( 'Read More', 'anariel' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
    <div class="entry-details">
         <?php if ( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    </a>
    <?php endif; ?>
    </div>
    <!-- end entry-details --> 
    </div>
</article>
<!-- end post-<?php the_ID(); ?> --> 


