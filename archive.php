<?php get_header(); ?>

<div class="container">
<div class="two_third">
<div class="archivepage">
  <?php while ( have_posts() ) : the_post(); ?>			
<h3 class="entry-title"><?php the_title(); ?></h3>

<?php the_content(); ?>
  <?php endwhile; ?>
  <br>
  <br>
  <h3>Archives by Month:</h3>
  <ul class="archive1">
    <?php wp_get_archives(); ?>
  </ul>
  <br>
  <h3>Archives by Subject:</h3>
  <ul class="archive1">
    <?php wp_list_categories(); ?>
  </ul>
  <br>
  <h3>Archives by Year:</h3>
  <?php wp_get_archives('type=yearly'); ?>
</div>
</div>
<aside>
    <div class="one_third lastcolumn newssidebar">
      <?php get_sidebar(); ?>
    </div>
  </aside>
</div>
<!-- container ends here --> 
<br>
<?php get_footer(); ?>
