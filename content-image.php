<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="clearfix">
  <div class="two_third imagegallery">
    <div class="entry-details">
      <?php if ( has_post_thumbnail() ): ?>
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      </a>
      <?php endif; ?>
    <h4>
    Posted by:<span class="author">
      <?php the_author(); ?>
      </span>
      Tags: <strong> <?php $tag = get_the_tags();
							if (! $tag) { ?>
            There is no tags
            <?php } else { ?>
            <?php the_tags(''); ?>
            <?php } ?></strong>
      </h4>
       <p class="meta"><?php the_time('F'); ?>
      <span class="numb"><?php the_time('j'); ?></span></p>
    </div>
    <!-- end entry-details -->
  </div>
 
  <div class="one_third lastcolumn rightside">
    <div class="entry-post-format clearfix">
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'anariel' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h3>
      <div class="inner">
      <?php if ( is_search() ) : // Only display Excerpts for search pages ?>
      <div class="entry-summary">
        <?php the_excerpt( __( 'More', 'anariel' ) ); ?>
      </div>
      <!-- end entry-summary -->
      <?php else : ?>
      <?php if ( post_password_required() ) : ?>
      <?php the_content( __( 'More', 'anariel' ) ); ?>
      <?php else : ?>
      <?php
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
						$image_img_tag = wp_get_attachment_image( $image->ID );
				?>
      <!-- end gallery-thumb -->
      
      <?php endif; ?>
      <div class="entry-post-format">
        <?php the_content( __( 'More', 'anariel' ) ); ?>
        <?php endif; ?>
      </div>
      <!-- end entry-content-gallery -->
      <?php endif; ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anariel' ), 'after' => '</div>' ) ); ?>
    </div>
      
    </div>
   </div> 
   
  </div>
</article>
<!-- end post-<?php the_ID(); ?> --> 

