<header id="header" role="banner">
	<div class="site-branding">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>images/logo-white.png" alt="<?php _e( 'Matt Geri Logo', 'mattgeritheme' ); ?>" title="<?php _e( 'Go to the homepage', 'mattgeritheme' ); ?>" class="logo">
		</a>
	</div>

	<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
		<div class="menu-drop">
			<a href="#dropmenu">&nbsp;</a>
		</div>

		<nav class="main-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'menu_class'     => 'nav-menu',
				'theme_location' => 'header-menu',
			) );
			?>
		</nav>
	<?php endif; ?>
</header>
