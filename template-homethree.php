<?php
/**
 * Template Name: Home Three
 *
 */

get_header(); ?>

<!-- Slider ==================================================
================================================== -->
<section class="slider">
  <?php get_sidebar( 'mainslider' ); ?>
</section>
<!-- slider ends here -->
<div class="container content page shoppage">
<div class="two_third">
  <?php the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
</div>
<br>
 <aside>
    <div class="one_third lastcolumn sidebar">
      <div class="sidebarinner">
        <?php get_sidebar( 'homethree' ); ?>
      </div>
    </div>
  </aside>
</div>
<!-- end container -->
<?php get_footer(); ?>
