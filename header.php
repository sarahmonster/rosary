<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 * We filter the output of wp_title() a bit -- see
		 * twentyten_filter_wp_title() in functions.php.
		 */
		wp_title( '|', true, 'right' );
	
		?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="apple-touch-icon" href="path/to/touchicon.png">
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png">


	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
	
	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/1140.css" type="text/css" media="screen" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/css3-mediaqueries.js"></script>
	
	<!-- load @font-face fonts -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fonts/verb/stylesheet.css" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>

</head>

<body <?php body_class(); ?>>

			<div class="container">
			
				<!-- Site title -->
				<div class="row">
					<div class="twelvecol last" id="site-title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php echo first_word(get_bloginfo('name')); ?></a>	
						<a id="mobile-menu-on" class="mobile-menu-button" href="#nav">Menu</a>
					</div>
				</div>
				
				<!-- Sidebar + menu -->
				<div class="row">
					<div class="threecol" id="nav">
						<a id="mobile-menu-off" class="mobile-menu-button" href="#">Exit</a>

						<div id="access" role="navigation"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></div>
						
						<a href="/books"><img class="buy-book" src="<?php bloginfo( 'template_directory' ); ?>/images/books.png" alt="Mysterious Albion and the Book of Thoth. Buy the books!"></a>
						
						<?php //get_sidebar(); ?>
					</div>
