<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw21serhatyi
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="header-top">
			<div class="container">
				<div class="site-branding">
					<div class="blog-name-logo">
						<a href="#"><img src="img/logo.png" alt="Loading..." ></a>
					</div>

				</div><!-- .site-branding -->
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
