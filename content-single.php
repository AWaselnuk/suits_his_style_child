<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail()) : ?>
  
  <div class="single-entry-details"> <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
    </a> </div>
  <!-- end single-entry-details -->
  <?php endif; ?>
  <header class="entry-header clearfix">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'anariel' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h2>
    <p><span class="date">
      <?php echo get_the_date(); ?>
      </span><br>
      <span class="author">
      <?php the_author(); ?>
      </span> <br>
      <span class="comments">
      <?php if ( comments_open() ) : ?>
      <?php comments_popup_link( __( '0 comments', 'anariel' ), __( '1 Comment', 'anariel' ), __( '% Comments', 'anariel' ) ); ?>
      <?php endif; ?>
      </span></p>
  </header>
  <!-- end entry-header -->
  
  <div class="single-entry-content">
    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
    <?php the_excerpt(); ?>
    <?php else : ?>
    <?php the_content( __( 'Continue Reading', 'anariel' ) ); ?>
    <div class="clear"></div>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
    <?php endif; ?>
    <footer class="single-entry-meta">
      <p>
        <?php if ( count( get_the_category() ) ) : ?>
        <?php printf( __( 'Categories: %2$s', 'anariel' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> |
        <?php endif; ?>
        <?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
        <?php printf( __( 'Tags: %2$s', 'anariel' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> |
        <?php endif; ?>
        <a href="<?php echo get_permalink(); ?>">
        <?php _e( 'Permalink ', 'anariel' ); ?>
        </a>
        <?php edit_post_link( __( 'Edit', 'anariel' ), '| <span class="edit-link">', '</span>' ); ?>
      </p>
    </footer>
    <!-- end entry-meta -->
    
    <?php if ( get_the_author_meta( 'description' ) ) :  ?>
    <div class="author-info"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'anariel_author_bio_avatar_size', 70 ) ); ?>
      <div class="author-description">
        <h3><?php printf( __( 'Author: %s', 'anariel' ), "<a href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h3>
        <p>
          <?php the_author_meta( 'description' ); ?>
        </p>
      </div>
      <!-- end author-description --> 
    </div>
    <!-- end author-info -->
    <?php endif; ?>
  </div>
  <!-- end single-entry-content -->
  
  </article>
  <!-- end post-<?php the_ID(); ?> -->
  <div class="clear"></div>
