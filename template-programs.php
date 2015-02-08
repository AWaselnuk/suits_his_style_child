<?php
/**
 * Template Name: Programs Page
 *
 */

get_header(); ?>
<?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
$taxonomy     = 'childrenprograms_cat';
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
'post_type' => 'childrenprograms',
'posts_per_page' => 100,
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
  <div class="two_third program">
    <?php 
	  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="grid_2 grid_item clearfix">
      <article>  <a href="<?php the_permalink() ?>">
        <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
        </a>
        <div class="programcontent">
        <a href="<?php the_permalink() ?>">
        <h3>
          <?php the_title(); ?>
        </h3>
        </a>
          <?php the_content(__('Read more', 'anariel')); ?>
        </div>
      </article>
    </div>
    <!-- grid ends here -->
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
  <aside>
    <div class="one_third lastcolumn sidebar">
      <div class="sidebarinner">
        <?php get_sidebar( 'programs' ); ?>
      </div>
    </div>
  </aside>
</div>
<!--end container-->
<?php get_footer(); ?>
