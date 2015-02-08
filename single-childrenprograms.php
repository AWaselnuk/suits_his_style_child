<?php
get_header(); ?>

<!-- Menu Content Part - Menu Items ==================================================
================================================== -->

<div class="container programspage">
  <div class="two_third program">
  <section class="programssingle">
    <?php 
	  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="clearfix">
    <div class="one_half">
      <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
    </div>
    <div class="one_half lastcolumn">
    <h3>
        <?php the_title(); ?>
      </h3>
      <p class="details1"><?php the_time('F jS, Y') ?> | <strong><?php the_author(); ?></strong> <br>
        <br>
        Categories: <strong> <?php $tag = get_the_tags();
							if (! $tag) { ?>
            There is no tags
            <?php } else { ?>
            <?php the_tags(''); ?>
            <?php } ?></strong> <br>
        <br>
        Comments:  <?php comments_number(); ?>
</p>
    </div>
    </div>
    <?php the_content(); ?>
  <?php comments_template( '', true ); ?>
    <?php endwhile; else: ?>
    <br>
    <h4>
      <?php _e('Woops...', 'anariel') ?>
    </h4>
    <p>
      <?php _e('Sorry, no posts were found.', 'anariel') ?>
    </p>
    <?php endif; ?>
    </section>
  </div>
  <aside>
    <div class="one_third lastcolumn sidebar">
      <div class="sidebarinner">
        <?php get_sidebar( 'programs' ); ?>
      </div>
    </div>
  </aside>
</div>
<?php get_footer(); ?>
