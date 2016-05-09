<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a_code_above
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script src="https://use.typekit.net/nvb5pkg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'a_code_above' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
      <div class="header-image">
        <a class ="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        </a>
      </div> <!-- .header-image -->
		</div><!-- .site-branding -->

    <div id="navbar" class="navbar">
      <nav id="site-navigation" class="navigation main-navigation" role="navigation">
        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        <?php get_search_form(); ?>
      </nav><!-- #site-navigation -->
    </div><!-- #navbar -->
  </header><!-- #masthead -->

	<div id="content" class="site-content">
