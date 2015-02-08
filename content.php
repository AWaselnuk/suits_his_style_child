<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-details">
    <?php if ( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    </a>
    <?php endif; ?>
  </div>
  <!-- end entry-details -->
  
  <header class="entry-header clearfix">
    <div class="newstitle">
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'anariel' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h3>
    <h4>
    Posted by:<span class="author">
      <?php the_author(); ?>
      </span>
      Tags: <strong> <?php $tag = get_the_tags();
							if (! $tag) { ?>
            There is no tags
            <?php } else { ?>
            <?php the_tags(''); ?>
            <?php } ?></strong> |
            <?php if ( count( get_the_category() ) ) : ?>
        <?php printf( __( 'Categories: %2$s', 'anariel' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> 
        <?php endif; ?>
      </h4>
      </div>
       <p class="meta"><?php the_time('F'); ?> <br>
      <span class="numb"><?php the_time('j'); ?></span></p>
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
</article>
<!-- end post-<?php the_ID(); ?> -->