<!-- Footer ==================================================
================================================== -->
<div id="footerblock">
  <div class="shadow">
    <div class="container footer">
      <div class="one_fourth"> 
      <?php get_sidebar( 'footerfirstcolumn' ); ?>
      </div>
      <!-- one_fourth ends here -->
      <div class="one_fourth">
        <?php get_sidebar( 'footersecondcolumn' ); ?>
      </div>
      <!-- one_fourth ends here -->
      <div class="one_fourth latestevent">
         <?php get_sidebar( 'footerthirdcolumn' ); ?>
      </div>
      <!-- one_fourth ends here -->
      <div class="one_fourth lastcolumn">
        <?php get_sidebar( 'footerfourthcolumn' ); ?>
      </div>
      <!-- one_fourth ends here --> 
    </div>
    <!-- container ends here -->
 <div class="container">
    <div class="clearfix">
      <p class="copyright"><?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
      <?php esc_attr_e('©', 'anariel'); ?>
      <?php _e(date('Y')); ?>
      <a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> <?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?> </a>
      <?php } // end if ?></p>
    </div>
    <!-- end clearfix -->  
  </div>
  <!-- end container --> 
  <div id="footermenublock">
      <div class="container">
        <div class="one_half">
          <?php get_sidebar( 'secondfooterleft' ); ?>
        </div>
        <!-- one_halfends here-->
        <div class="one_half lastcolumn">
          <div id="footerLinks">  <?php get_sidebar( 'secondfooterright' ); ?> </div>
        </div>
        <!-- one_half ends here--> 
      </div>
      <!-- container ends here--> 
    </div>
    <!-- footermenublock ends here--> 
  </div>
  <!-- shadow ends here --> 
</div>
<!-- container ends here --> 
<?php wp_footer(); ?>
</body></html>