<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>

  <div class="container page sitemap">
    <div class="one_third">
      <h3>Pages</h3>
      <ul>
        <?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '',
    'title_li' => '',
  )
);
?>
     </ul>
    </div>
    <div class="one_third">
      <h3>News Posts</h3>
      <?php
// Add categories you'd like to exclude in the exclude here
$cats = get_categories('exclude=');
foreach ($cats as $cat) {
  echo "";
  echo "<ul>";
  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
  while(have_posts()) {
    the_post();
    $category = get_the_category();
    // Only display a post link once, even if it's in multiple categories
    if ($category[0]->cat_ID == $cat->cat_ID) {
      echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    }
  }
  echo "</li>";
  echo "</ul>";
}
?>
      </ul>
    </div>
    <div class="one_third lastcolumn">
      <h3>Other Posts</h3>
      <?php
	$args = array( 
				'post_type' => 'childrenprograms', 
				'posts_per_page' => '1', 		
			);
foreach( get_post_types( array('public' => true) ) as $post_type ) {
  if ( in_array( $post_type, array('post','page','involvedwithus') ) )
    continue;

  $pt = get_post_type_object( $post_type );
  echo '';
  echo '<ul>';

  query_posts('post_type='.$post_type.'&posts_per_page=-1');
  while( have_posts() ) {
    the_post();
    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
  }

  echo '</ul>';
}
?>
    </div>
  </div>
  <!-- container ends here --> 
<?php get_footer(); ?>