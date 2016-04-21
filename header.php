<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" role="banner">
	<div class="site-branding">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>images/logo.jpg" alt="<?php _e( 'Matt Geri Logo', 'mattgeritheme'); ?>" title="<?php _e( 'Go to the homepage', 'mattgeritheme'); ?>" class="logo">
		</a>
	</div>

	<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'menu_class'     => 'nav-menu',
				'theme_location' => 'header-menu',
			) );
			?>
		</nav>
	<?php endif; ?>
</header>
