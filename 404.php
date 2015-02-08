<?php get_header(); ?>

<div class="container">
  <div class="two_third">
    <article id="page">
      <header class="page-entry-header"> <br>
        <h2 class="entry-title">
          <?php _e( 'Not Found', 'anariel' ); ?>
        </h2>
      </header>
      <!-- end page-entry-header -->
      
      <div class="single-entry-content">
        <p>
          <?php _e( 'Apologies, but the page you requested could not be found.', 'anariel' ); ?>
        </p>
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
    </article>
  </div>
  <aside>
    <div class="one_third lastcolumn newssidebar">
      <?php get_sidebar(); ?>
    </div>
  </aside>
</div>
<?php get_footer(); ?>
