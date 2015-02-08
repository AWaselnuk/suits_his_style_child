<?php
	$content_link_color = get_option('content_link_color');
?>
<style>
a, span.orange, form#commentform span.required, #mainnav ul li a:hover::before, #mainnav ul li a:focus::before, form#commentform span.required { color:  <?php echo $content_link_color; ?>; }
.woocommerce .star-rating, .woocommerce form .form-row .required, .woocommerce-page form .form-row .required { color:  <?php echo $content_link_color; ?>!important; }
.woocommerce-error { border-top-color:  <?php echo $content_link_color; ?>!important; }
#secondary-slider a.more-link, .searchsubmit, .contact-form input[type="submit"], #secondary-slider a.more-link, .searchsubmit, .contact-form input[type="submit"], .home_widget .soliloquy-caption a  { background:  <?php echo $content_link_color; ?>;}
a.donate, #calltoaction .donate { background-color:  <?php echo $content_link_color; ?>;}
.form-errors .form-error-message, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce-error:before { background:  <?php echo $content_link_color; ?>!important;}
</style>