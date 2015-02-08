<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--[if lt IE 9]>
<script>
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
document.createElement('hgroup');
</script>
<![endif]-->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--=================================== Mobile Specific Meta  ===================================-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<!-- Favicons ==================================================
================================================== -->
<link rel="shortcut icon" href="<?php echo get_theme_mod( 'anariel_favicon' ); ?>">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--Content Part - Logo ==================================================
================================================== -->
<div id="header">
  <div class="container homeone">
   <?php if ( get_theme_mod( 'anariel_logo' ) ) : ?>
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'anariel_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    <p class="title">
        <?php bloginfo( 'description' ); ?>
      </p> </div>
    <?php else : ?>
    <div id="site-title">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
        </a></h1>
      <h2 id="site-description">
        <?php bloginfo( 'description' ); ?>
      </h2>
    </div>
    <?php endif; ?>
    <div id="calltoaction">
      <?php get_sidebar( 'calltoaction' ); ?>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- header ends here--> 

<!-- Navigation ==================================================
================================================== -->
<div id="title">
  <div class="container">
      <!-- Nav -->
     <nav id="mainnav" class="cl-effect-13 clearfix">
      <h3 class="menu-toggle">
        <?php _e( 'Menu', 'anariel' ); ?>
      </h3>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav>
    <!-- end mainnav -->
     <section class="socials">
         <?php get_sidebar( 'socials' ); ?>
        </section> 
  </div>
  <!-- container ends here --> 
</div>
<!-- navigation ends here --> 

<img class="headerimage" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- end headerimage -->

