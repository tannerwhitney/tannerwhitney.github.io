<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		
		<style>
		mySlides {
			display: none
			
		}
		slideshow-container {
 		 	max-width: 1000px;
  			position: relative;

		}
		</style>

		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="http://tannerwhitney.com/wp-content/uploads/2015/12/favicon3.ico"/>		
		
	</head>

</html>