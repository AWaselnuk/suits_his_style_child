<?php
/**
 * Template Name: Contact Page
 *
 */

get_header(); ?>
<div class="contact">
<div class="container content">
<div class="two_third">
  <?php the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
</div>
<aside>
<div class="one_third lastcolumn contactsidebar">
   <?php get_sidebar( 'contact' ); ?>
</div>
</aside>
</div>
<!-- end container -->
</div>
<?php get_footer(); ?>
