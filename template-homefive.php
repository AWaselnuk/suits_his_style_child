<?php
/**
 * Template Name: Home Five
 *
 */

get_header(); ?>
<!-- News ==================================================
================================================== -->

<div class="newsblock">
  <div class="container news">
    <div class="one_third">
      <div id="secondary-slider" class="flexslider">
        <ul class="slides">
          <?php
	query_posts(array('post_type' => 'ourevents', 'posts_per_page' => 3));
	if(have_posts()) :
	    while(have_posts()) : the_post();
	?>
          <li>
            <?php the_post_thumbnail(); ?>
            <section>
              <h3><a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                </a></h3>
              <?php global $more;
                $more = 0; ?>
              <?php the_content(__('More Details', 'anariel')); ?>
            </section>
            <div class="blog-post-date clearfix">
              <p>
                <?php the_time('F jS, Y') ?>
              </p>
            </div>
          </li>
          <?php
	    endwhile;
	endif;
	wp_reset_query();
	?>
        </ul>
      </div>
    </div>
    <div class="two_third lastcolumn latestpost">
      <div class="clearfix">
        <?php $the_query = new WP_Query( 'showposts=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid_3 grid_item clearfix version post">
          <article>
            <div class="blog-post-inner">
              <div class="blog-post-thumb"> <a href="<?php the_permalink() ?>">
                <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
       ?>
                </a></div>
              <!-- .blog-post-thumb -->
              <div class="blog-post-main">
                <h2 class="blog-post-title"><a href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                  </a></h2>
                <div class="blog-post-date-home">
                  <?php the_time('F jS, Y') ?>
                </div>
                <div class="blog-post-excerpt">
                  <?php global $more;
                $more = 0; ?>
                  <?php the_content(__('More', 'anariel')); ?>
                </div>
                <!-- .blog-post-excerpt -->
                <div class="blog-post-category"> Posted In:
                  <?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'anariel' ), $category->name ) ) . '">'.$category->cat_name.'</a> /'.$separator;
	}
echo trim($output, $separator);
}
?>
                </div>
                <!-- .blog-post-category --> 
              </div>
              <!-- .blog-post-main --> 
              
            </div>
          </article>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <!--end two_third--> 
    
  </div>
</div>
<div class="container content page">
    <?php the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
</div>
<!-- end container -->
</div>
<?php get_footer(); ?>
