<div class="shadow2">
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
    <footer class="entry-meta">
      <p>
        <?php if ( count( get_the_category() ) ) : ?>
        <?php printf( __( 'Categories: %2$s', 'anariel' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> <span class="devider">&bull;</span>
        <?php endif; ?>
        <?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
        <?php printf( __( 'Tags: %2$s', 'anariel' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> <span class="devider">&bull;</span>
        <?php endif; ?>
        <a href="<?php echo get_permalink(); ?>">
        <?php _e( 'Permalink ', 'anariel' ); ?>
        </a>
        <?php edit_post_link( __( 'Edit', 'anariel' ), '<span class="devider">&bull;</span> <span class="edit-link">', '</span>' ); ?>
      </p>
    </footer>
    <!-- end entry-meta --> 
  </div>
  <!-- end entry-post-format -->   
</article>
<!-- end post-<?php the_ID(); ?> --> 
</div>
