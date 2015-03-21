<?php

function ui_adjustments() {
  ?>
  <script type="text/javascript" charset="utf-8">
  		jQuery(document).ready(function() {
  		
  			// TODO: jQuery manipulations
			
	//		
  		});
  </script>
  
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('require', 'displayfeatures');
  ga('create', 'UA-52273710-1', 'midaat.org.il');
  ga('send', 'pageview');

</script>
  
  <?php
}
add_action('wp_head','ui_adjustments');

function rtl_ui_adjustments() {
	?>
  <script type="text/javascript" charset="utf-8">
  		jQuery(document).ready(function() {
  			
  			// TODO: RTL jQuery manipulations
  			
   			
  			
  		
  		});
  	</script>
  	<?php
}
add_action('wp_head','rtl_ui_adjustments');

function child_l10n () {
	load_child_theme_textdomain('customizr', get_stylesheet_directory()."/lang");
}
add_action( 'after_setup_theme', 'child_l10n' );



/* 
  Supporting secondary menus n hover
  http://wordpress.org/support/topic/how-toenable-parent-links-in-menu-while-keeping-mobile-support
*/
/*
function my_list_pages_shortcode_excerpt( $excerpt, $page, $depth, $args ) {
    return $excerpt . '...';
}
add_filter( 'list_pages_shortcode_excerpt', 'my_list_pages_shortcode_excerpt', 10, 4 );
*/
/*
add_filter('tc_menu_display', 'acub_menu_display');
function acub_menu_display($output) {
	echo preg_replace('| class="dropdown-toggle" data-toggle="dropdown" data-target="#"(.+?)<b |', ' class="a-stripped" $1</a><a href="#" class="dropdown-toggle a-caret" data-toggle="dropdown" data-target="#"><b ', $output, -1);
	}
	*/
?>