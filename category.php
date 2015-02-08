<?php get_header(); ?>
  <div class="container">
    <h1 class="category">
      <?php single_cat_title(); ?>
    </h1>
  </div>

<div class="container content newspage">
<div class="two_third newsarticles">
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
 </div>
  <?php /* Display navigation to next/previous pages when applicable */ ?>
  <?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <nav id="nav-below">
    <div class="nav-previous">
      <?php next_posts_link( __( '&lt; Older posts', 'anariel' ) ); ?>
    </div>
    <div class="nav-next">
      <?php previous_posts_link( __( 'Newer posts &gt;', 'anariel' ) ); ?>
    </div>
  </nav>
  <!-- end nav-below -->
  <?php endif; ?>
  <aside>
    <div class="one_third lastcolumn newssidebar">
       <?php get_sidebar(); ?>
     </div>
  </aside>
</div>
<!-- end container -->
<?php get_footer(); ?>
