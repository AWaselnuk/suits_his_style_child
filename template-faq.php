<?php
/**
 * Template Name: Faq Page
 *
 */
get_header(); ?>

<div class="introblock">
  <div class="container">
    <section class="intro">
      <h1>
        <?php the_title(); ?>
      </h1>
    </section>
  </div>
</div>
<?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
$taxonomy     = 'faq_cat';
$orderby      = 'name'; 
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>
<?php 
// query args
$query = array(
'post_type' => 'faq',
'posts_per_page' => 1000,
'paged' => ( get_query_var('paged') ? get_query_var('paged') : true )
);
// query
query_posts( $query );

global $more;
$more = 0;
?>

<!-- Menu Content Part - Menu Items ==================================================
================================================== -->
<div class="container programspage">
    <?php 
	  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="accordion-trigger">
        <h4>
          <?php the_title(); ?>
        </h4>
      </div>
      <div class="accordion-container">
        <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
        <?php the_content();?>
        <div class="clear"></div>
      </div>
    <?php endwhile; else: ?>
    <br>
    <h4>
      <?php _e('Woops...', 'anariel') ?>
    </h4>
    <p>
      <?php _e('Sorry, no posts were found.', 'anariel') ?>
    </p>
    <?php endif; ?>
</div>
<!--end container-->
<?php get_footer(); ?>