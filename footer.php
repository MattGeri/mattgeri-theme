<footer id="footer" role="contentinfo">
	<?php if ( has_nav_menu( 'social-menu' ) ) : ?>
		<nav id="social-navigation" class="social-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social-menu',
				'depth'          => 1,
				'link_before'    => '<span class="screen-reader-text">',
				'link_after'     => '</span>',
			) );
			?>
		</nav>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
		<nav id="site-navigation" class="footer-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'menu_class'     => 'nav-menu',
				'theme_location' => 'footer-menu',
			) );
			?>
		</nav>
	<?php endif; ?>
</footer>

<script>hljs.initHighlightingOnLoad();</script>

<?php wp_footer(); ?>

</body>
</html>