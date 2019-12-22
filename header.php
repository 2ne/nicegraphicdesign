<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nicegraphicdesign
 */
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/MyFontsWebfontsKit.css">
<style>
  .sharing {
    display: none !important;
  }
  </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="clear">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="Logo" style="width: 175px;" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png"/><?php bloginfo( 'name' ); ?></a></h1>

					<div class="contact-details">
						<div><a class="black no-underline" href="tel:+447712321907">+44 (0) 7712 321 907</a></div>
						<div><a class="black" href="mailto:simon@nicegraphicdesign.co.uk">simon@nicegraphicdesign.co.uk</a></div>
					</div>
				</div><!-- .site-branding -->

				<div class="header-aside">
					<h2><?php the_field('header_title'); ?></h2>
					<span class="site-description"><?php the_field('header_text'); ?></span>
					<h2 class="hide-home">A Nice Devon Graphic Designer</h2>
				</div>		
			</div>
		</div>
		<div class="nav-container">
			<div class="wrapper clear">
				<nav id="site-navigation" class="main-navigation clear" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nicegraphicdesign' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="social">
					<a class="social-icon pinterest" href="https://uk.pinterest.com/avery0044/">Pinterest</a>
					<a class="social-icon twitter" href="https://twitter.com/simonatnice">Twitter</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">