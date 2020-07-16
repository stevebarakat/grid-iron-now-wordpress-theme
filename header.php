<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sportsday Now
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site container">
	
	<!-- Screen reader text -->
	<a class="hidden" href="#content"><?php _e( 'Skip to content', 'sportsdays-now' ); ?></a>

	<div class="margin-fix">
		

<header id="masthead" class="row" role="banner">


		<div class="site-branding col-lg-12">


			
			<!-- Sportsday Now Logo -->
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></h1>




					<div class="header-bottom">
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<!-- SEC Logo -->
						<img src="http://www.sportsdaynow.com//wp-content/uploads/2014/12/sec-conf-logo.png" class="seclogo" >
					</div>





		</div><!-- .site-branding -->
		





		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'sportsdays-now' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	
<div class="bg-white">
	<div id="content">
		<!-- Start Grid -->
		<div id="row">
